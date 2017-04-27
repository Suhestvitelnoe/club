<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Group;
use App\Member;

use Input;
use Auth;

class AjaxController extends Controller
{
    public function getGroup() {
    	$group = Group::where('user_id', Auth::user()->id)->get();
    	$member = Member::where('user_id', Auth::user()->id)->get();
    	return view('ajax.groups')->with('group', $group)->with('member', $member);
    }
}
