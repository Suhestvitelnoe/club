<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Photo;
use App\Photocat;

class GuestPhotoController extends Controller
{
    public function getIndex($cat_id = null) {
    	$cats = Photocat::where('showhide', 'show')->get();
    	if($cat_id!=null) {
    		$photos = Photo::where('cat_id', $cat_id)->orderBy('id', 'DESC')->paginate(21);
            $one_photo = Photo::latest('created_at')->where('cat_id', $cat_id)->first();
            
    	}
    	else {
    	$photos = Photo::where('showhide', 'show')->orderBy('id', 'DESC')->paginate(21);
        $one_photo = Photo::latest('created_at')->first();
            
    	}
    
    	return view('photos.guestphotos')->with('photos', $photos)->with('cats', $cats)->with('one_photo', $one_photo);
    }
}
