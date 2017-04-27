<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Member;
use App\Group;
use App\Theme;
use App\GroupMessages;
use Auth;
use Input;


class GroupForGuestController extends Controller
{
    public function getIndex(){
		$all=Group::where('showhide','show')->get();
		return view ("unAuth.groupsForGuest")->with('all',$all);
   }
	public function getOne($id){
		$groupthemes = Theme::where('group_id', $id)->get();
		$one=Group::find($id);
 if(isset(Auth::user()->id)){
			$mem_user=Member::where('group_id',$id)->where('user_id',Auth::user()->id)->first();
			 //dd($mem_user);
			if(isset($mem_user->user_id)){
				$mm = $mem_user->status;
			}elseif(Auth::user()->id == $one->user_id){
				$mm = 'owner';
			}
 }
		if(!isset($mm)){
			$mm = '';
		} 
		$messages=GroupMessages::where('group_id',$id)->orderBy('id', 'desc')->paginate(10);

	   	return view('unAuth.oneGroupForGuest')->with('one',$one)->with('mm',$mm)->with('groupthemes', $groupthemes)->with('messages',$messages);
	}
	public function postSend(Request $request,$id){
	
		$message = new GroupMessages();
		$message->user_id=Auth::user()->id;
		$message->group_id=$id;
		$message->theme=$request->input('theme');
		$message->body = $request->input('body');
		$message->save();
		return redirect()->back();

		}
}

