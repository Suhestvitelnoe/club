<?php

namespace App\Http\Controllers\Cabinet;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Photo;
use App\Photocat;
use Input;
use Auth;

class PhotoController extends Controller
{
    public function getIndex($cat_id = null) {
    	$cats = Photocat::where('showhide', 'show')->get();
    	if($cat_id!=null&&Auth::user()->id) {
    		$photos = Photo::where('cat_id', $cat_id)->where('user_id', Auth::user()->id)->orderBy('id', 'DESC')->paginate(21);
    	}
    	else {
    	$photos = Photo::where('user_id', Auth::user()->id)->orderBy('id', 'DESC')->paginate(21);
    	}
    
    	return view('photos.photos')->with('photos', $photos)->with('cats', $cats);
    
    }

    public function postPhoto(Requests\PhotoRequest $request) {
    	$picture = \App::make('\App\libs\Imag')->url($_FILES['picture']['tmp_name'], '/media/uploads/photos/'.Auth::user()->id.'/', Auth::user()->id.'_'.time());
        $request['photo'] = $picture;
        $request['user_id'] = Auth::user()->id;
        $request['cat_id'] = 
        $photos = Photo::Create($request->all());
        return redirect()->back();
    }

    public function getEdit($id) {
     $edit_photo = Photo::find($id);
     
     return view('photos.edit_photo')->with("edit_photo", $edit_photo);
    }

    public function postEdit(Requests\PhotoRequest $request, $id) {
        Photo::find($id)->update($request->all());
        return redirect('photos');
    }

    public function getDelete($id) {
        Photo::find($id)->delete();
        return redirect()->back();
    }

}
