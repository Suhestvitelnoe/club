<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Group;
use App\User;
use App\Account;
use DB;
use Carbon\Carbon;

class SearchController extends Controller
{
	public function getResults(Request $request) {        
        $query = $request->input('query');
        if (!$query) {
         	return redirect('groups.groups');
         }
        $groups = Group::where('name', '=', "{$query}") ->get();     
		return view('search.results')->with('groups', $groups);
	}
	public function getFriendresults(Request $request) {        
        $query = $request->input('query');
         if (!$query) {
         	return redirect('friends');
         }
        $users = User::where('name', '=', "{$query}")->get();
		return view('search.friendsresults')->with('users', $users);
	}
	public function postAdvanced(Request $request){
		 $city_query = $request->input('city');
		 $pol_query = $request->input('pol');
	
		$friends=Account::where('city',$city_query)->orWhere('pol',$pol_query)->get();
		
		return view('friends.includes.advanced_results')->with('friends',$friends);
		
	}
}
