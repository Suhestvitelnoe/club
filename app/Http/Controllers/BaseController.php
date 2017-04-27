<?php

namespace App\Http\Controllers;
use DB;
use App\Group;
use App\Theme;
use App\Photo;
use App\User;
use Illuminate\Http\Request;
use Auth;
use App\Http\Requests;

class BaseController extends Controller
{

   public function Index()
   {
	   $groups=Group::where('showhide','=','show')->orderBy(DB::raw('RAND()'))->limit(5)->get();
	   $themes=Theme::latest('id')->orderBy('id','DESC')->limit(3)->paginate(2);
       $photos = Photo::latest('id')->orderBy('id', 'DESC')->limit(3)->paginate(2);
	  $users = User::where('remember_token', '!=', '')->limit(5)->orderBy('updated_at', 'DESC')->get();
   return view('base')->with('groups',$groups)->with('themes',$themes)->with('photos', $photos)->with('users', $users);
   }
   

}
