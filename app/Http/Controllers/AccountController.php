<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use Auth;
use App\User;
use App\Group;
use App\Theme;
use App\Article;
use App\Account;
use App\Raiting;
use DB;


class AccountController extends Controller
{
    public function getIndex($id){
		$ac=User::where('name',$id)->first();
		$groups=Group::where('user_id',$ac->id)->where('showhide','show')->get();
		$themes=Theme::where('user_id',$ac->id)->where('showhide','show')->get();
		$articles=Article::where('user_id',$ac->id)->orderBy('id','DESC')->take(1)->get();
		$max_raiting=Account::max('raiting');
		
		$t_raiting=DB::table('accounts')->select('raiting')->where('user_id',$ac->id)->first();
		//dd($t_raiting);
		if(isset($t_raiting)){
		$accounts=Account::where('user_id',$ac->id)->get();
		$val=($max_raiting*$t_raiting->raiting)/100;
		$raiting=$val;
		}
		else{
			$raiting=0;
			$accounts='';
		}
		return view('account.account')->with('ac',$ac)->with('groups',$groups)->with('themes',$themes)->with('articles',$articles)->with('accounts',$accounts)->with('raiting',$raiting);
	}
	public function getAll(){
		$all=User::paginate(100);
		return view('account.allaccounts')->with('all',$all);
	}
	public function postIncrement(Requests\RaitingRequest $r, $id){
		
		$ac=User::where('name',$id)->first();
		if($r->plus){
			DB::table('accounts')->where('user_id',$id)->increment('raiting',1);
		}elseif($r->minus)	{
			DB::table('accounts')->where('user_id',$id)->decrement('raiting',1);
		}
		$r['user_id']=Auth::user()->id;
			Raiting::create($r->all());
			return redirect()->back();
	}

}
