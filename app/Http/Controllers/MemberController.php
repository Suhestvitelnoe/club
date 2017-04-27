<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Member;


class MemberController extends Controller
{
    public function getIndex(){
		$one=Member::find('id');
		return view('members.members')->with()
	}
}
