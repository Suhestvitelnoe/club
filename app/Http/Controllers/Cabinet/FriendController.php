<?php
namespace App\Http\Controllers\Cabinet;
use Illuminate\Http\Request;
use App\Http\Requests;
use Auth;
use App\Http\Controllers\Controller;
use App\Account;
use App\Friend;
use App\User;
use App\Group;

class FriendController extends Controller
{
    public function getIndex() {
		$friends=Friend::where('accept',1)->where('user_id',Auth::user()->id)->get();
		$friendss=Friend::where('accept',1)->where('friend_id',Auth::user()->id)->get();
		$requests=Friend::where('accept',0)->where('user_id',Auth::user()->id)->get();
		if ($_GET){
			$friend=User::where('name',$_GET['query'])->first();	
		}
		else{
			$friend="";
		}
		return view('friends.main')->with('friends',$friends)->with('requests',$requests)->with('friend',$friend)->with('friendss',$friendss);	    	
	}
	public function getFriends(){
	
	}
	public function getName($id){
		$query=$request->input('query');
		$users=User::where('name','=',$query)->get();
		return redirect ('friends')->with('users',$users);
	}
	public function getAdd($id){

		$f=new Friend;
		$f->user_id=$id;
		$f->friend_id=Auth::user()->id;
		$f->save();

		return redirect ('friends');
	}
	
	public function getConfirm ($id){
		$r=Friend::find($id);
		$r->accept=1;
		$r->save();
		return redirect ('friends');
		}
	public function getDelete($id){
		$m=Friend::find($id);
		$m->delete();
		return redirect ('friends');
		}
}
