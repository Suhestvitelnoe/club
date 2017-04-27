<?php

namespace App\Http\Controllers\Cabinet;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Music;
use App\MusicCategory;
use Input;
use Auth;

class MusicController extends Controller
{
    public function getIndex($cat_id = null) {
       if($cat_id!=null) {
            $songs = Music::where('user_id', Auth::user()->id)->where('cat_id', $cat_id)->paginate(25);
            $genres = MusicCategory::where('showhide', 'show')->get();
        }
        else {
            $songs = Music::where('user_id', Auth::user()->id)->paginate(25);
            $genres = MusicCategory::where('showhide', 'show')->get();
    }
    
   
    
    return view('music.main_music')->with('songs', $songs)->with('genres', $genres);
    }

    public function postAdd(Requests\MusicsRequest $request) {
    	$request['user_id'] = Auth::user()->id;
        $dir = public_path().'/uploads/music/'.Auth::user()->id.'/';
            if(!file_exists($dir)){
                mkdir($dir, 0777, true);
            }
        copy($_FILES['song']['tmp_name'], $dir.$_FILES['song']['name']);
        $request['file'] = $_FILES['song']['name'];
    	Music::Create($request->all());
        return redirect("musics");
    }
}
