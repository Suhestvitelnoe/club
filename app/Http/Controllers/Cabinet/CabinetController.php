<?php

namespace App\Http\Controllers\Cabinet;

use App\Http\Controllers\Controller;
use App\Account;
use App\Setting;
use App\Http\Requests;
use App\Theme;
use App\Photo;
use Request;
use Input;
use Image;
use Auth;

class CabinetController extends Controller
{   public $url;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
       
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function getIndex() {
		$themes=Theme::latest('id')->orderBy('id','DESC')->limit(3)->paginate(3);
        $photos = Photo::latest('id')->orderBy('id', 'DESC')->limit(3)->paginate(3);
        return view('cabinet.cabinet')->with('themes',$themes)->with('photos', $photos);
    }


    public function getSettings() {
        return view('cabinet.settings');
    }

    public function settShowHide(Requests\SettingsRequest $req) {
        $req['user_id'] = Auth::user()->id;
        Setting::updateOrCreate([
            'user_id' => Auth::user()->id],$req->all());
        return redirect("cabinet");
        }



    public function getPersonaldata($user_id) {

        $edit_name = Account::where('id', $user_id)->first();
        if(!$edit_name) {
            $edit_name = new Accont();
        }
        return view('cabinet.personal_data')->with('edit_name', $edit_name);          
    }

    public function postIndex(Requests\AccountRequest $req)
    {
       $req['user_id'] = Auth::user()->id;
       $avat = \App::make('\App\libs\Imag')->url($_FILES['ava']['tmp_name'], '/media/uploads/avatar/'.Auth::user()->id.'/', Auth::user()->id);
       if($avat) {
        $req['avatar'] = $avat;
       }
       $req['status'] = 'Новичок';
       $fon = \App::make('\App\libs\Imag')->url($_FILES['fon']['tmp_name'], '/media/uploads/account_fon/'.Auth::user()->id.'/', Auth::user()->id);
        if($fon) {
        $req['cabinet_fon'] = $fon;
       }
        Account::updateOrCreate([
            'user_id' => Auth::user()->id],$req->all());
        return redirect("cabinet");
}
}