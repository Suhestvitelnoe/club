<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Music;
use App\MusicCategory;



class GuestMusicController extends Controller
{
    public function getIndex($cat_id = null) {
   
    if($cat_id!=null) {

        $songs = Music::where('cat_id', $cat_id)->where('showhide', 'show')->paginate(25);
         $genres = MusicCategory::where('showhide', 'show')->get();
    }
    else {
        $songs = Music::where('showhide', 'show')->paginate(25);
         $genres = MusicCategory::where('showhide', 'show')->get();
       
    }
    
   
    
    return view('music.guest_main_music')->with('songs', $songs)->with('genres', $genres);
    }
}
