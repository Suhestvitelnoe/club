<?php

namespace App\Http\Controllers;

use App\Account;
use App\Setting;
use App\Http\Requests;

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
    public function index() {
        return view('cabinet.cabinet');
    }


    public function getSettings() {
        return view('cabinet.settings');
    }

    public function settShowHide(Requests\SettingsRequest $req) {
        $req['sett_user_id'] = Auth::user()->id;
        Setting::updateOrCreate([
            'user_id' => Auth::user()->id],$req->all());
        return redirect("cabinet");
        }



    public function getPersonaldata() {
        return view('cabinet.personal_data');          
    }

    public function postIndex(Requests\AccountRequest $req)
    {
       $req['user_id'] = Auth::user()->id;
       $avat = \App::make('\App\libs\imag')->url($_FILES['ava']['tmp_name'], '/media/uploads/avatar/'.Auth::user()->id.'/', Auth::user()->id);
       if($avat) {
        $req['avatar'] = $avat;
       }
       $req['status'] = 'Новичок';
       $fon = \App::make('\App\libs\imag')->url($_FILES['fon']['tmp_name'], '/media/uploads/account_fon/'.Auth::user()->id.'/', Auth::user()->id);
        if($fon) {
        $req['cabinet_fon'] = $fon;
       }
        Account::updateOrCreate([
            'user_id' => Auth::user()->id],$req->all());
        return redirect("cabinet");
}
}