<?php

namespace App\Http\Controllers\Cabinet;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\GroupRequest;
use App\Http\Requests;
use App\Account;
use Auth;
use App\Group;
use App\Member;
use App\Theme;
use App\User;
use App\GroupMessages;

class GroupController extends Controller
{

   public function getIndex($group_id = null) {
   
   		$personal = Account::where('user_id', Auth::user()->id)->first();
     	if(!$personal) {
         	$personal = new Account();
    	 }
    	$url = $_SERVER['REQUEST_URI'];
  		$groups=Group::where('user_id',Auth::user()->id)->get();   
   		return view("group.main")->with('groups',$groups)->with('url', $url)->with('personal', $personal);
   		}

   public function postIndex(GroupRequest $r){
   		$r['user_id']=Auth::user()->id;
   
   		Group::create($r->all());  
   		return redirect('group');  
   		}
   		

	public function getOne($id)  {
		$one=Group::find($id);
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
		return view('group.one')->with('one',$one)->with('mm',$mm)->with('groupthemes', $groupthemes)->with('messages',$messages);
	} 
	public function getConfirm($id){
		$one=Member::find($id);
		if (Auth::user()->id==$one->owner_id){
			$up=member::find($one->id);
			$up->status='confirmed';
			$up->save();
			return redirect ('groups');
		}
		
	}
	public   function getUnconfirm($id){
		$one=Member::find($id);
		$one->delete();
		return redirect ('groups');
	}	
	public function getAdd($id){
		$one=Group::find($id);
		$all_ready=Member::where('user_id',Auth::user()->id)->where('group_id',$id)->count();
		if ($all_ready==0){
			$thema="Вам поступило сообщение с сайта";
			$body="Пользователь <a href='#'> ".Auth::user()->name."</a>Хотите присоединиться к группе". $one->name;
			mail($one->users->email,$thema,$body);
			$gg=new Member;
			$gg->owner_id =$one->users->id;
			$gg->user_id =Auth::user()->id;
			$gg->status='new';
			$gg->group_id =$one->id;
			$gg->save();
		}	
		return redirect()->back();		
	}
	public function getDelete($id){
			$one=Group::find($id);
			$all_ready=Member::where('user_id',Auth::user()->id)->where('group_id',$id)->count();			
			if ($all_ready==0){
				$thema="Вам поступило сообщение с сайта";
				$body="Пользователь <a href='#'> ".Auth::user()->name."</a>Хотите присоединиться к группе". $one->name;
				mail($one->users->email,$thema,$body);
				$gg=new Member;
				$gg->owner_id =$one->users->id;
				$gg->user_id =Auth::user()->id;
				$gg->status='new';
				$gg->group_id =$one->id;
				$gg->save();
			}	
			return redirect ('groups');
			
		}
		
		public function getMessage() {
			//$message=GroupMessage::where('user_id',);
		}


		
	public function getDel($id){
		$one=Member::where('group_id',$id)->where('user_id',Auth::user()->id)->first();
		if($one->user_id==Auth::user()->id){
		$s=Member::find($one->id);
		$s->status='confirmed';
		$one->delete();
		return redirect ('groups');
		}
	

		
	}		
}
