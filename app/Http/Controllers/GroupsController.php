<?php

namespace App\Http\Controllers;
use App\Member;
use App\Group;
use App\Theme;

use Auth;
use Illuminate\Http\Request;

use App\Http\Requests;

class GroupsController extends Controller
{
   public function getIndex(){
	   $all=Group::where('showhide','show')->get();
	  return view ("groups.groups")->with('all',$all);
   }
	public function getOne($id){
		$groupthemes = Theme::where('group_id', $id)->get();
		$one=Group::find($id);
		foreach($one->members() as $mem){
			$mem_user=Member::where('group_id',$id)->where('user_id',Auth::user()->id)->first();
			 
			if(isset($mem_user->user_id)){
				$mm = $mem_user->status;
			}
		
		}
		if(!isset($mm)){
			$mm = false;
		} 
	   return view('groups.one')->with('one',$one)->with('mm',$mm)->with('groupthemes', $groupthemes);
}

		
	
	
}
