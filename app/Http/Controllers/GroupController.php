<?php

namespace App\Http\Controllers;

use App\Account;
use Illuminate\Http\Request;
use App\Http\Requests\GroupRequest;
use App\Http\Requests;
use Auth;
use App\Group;
class GroupController extends Controller
{
   public function getIndex() {
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
   //dd($r->all());
   Group::create($r->all());  
   return redirect('group');  
   }   
}
