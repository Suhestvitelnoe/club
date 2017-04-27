<?php

namespace App\Http\Controllers\Cabinet;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Usermail;
use App\User;
use Request;
use Input;
use Auth;

class UsermailController extends Controller
{
	public $res_id = null;
	public function getIndex($cat_id=null) {
		$whois = 'От кого';
		if($cat_id == null) {
			$mails = Usermail::where('reciever_id', Auth::user()->id)->orderBy('id', 'desc')->paginate(25);
			}
		if($cat_id == 'sended') {
			$mails = Usermail::where('sender_id', Auth::user()->id)->orderBy('id', 'desc')->paginate(25);
			$whois = 'Кому';
			}
		if($cat_id == 'entrance') {
			$mails = Usermail::where('reciever_id', Auth::user()->id)->orderBy('id', 'desc')->paginate(25);
			}

    	return view('usermail.main')->with('mails', $mails)->with('whois', $whois);
}

	public function getNewletter() {

		return view('usermail.new_letter');
	}

	public function getTyping($res_id) {
		$this->res_id = $res_id;
		$typing = Usermail::where('sender_id', $this->res_id)
							->where('reciever_id', Auth::user()->id)
							->orWhere(function($query) {
									$query->where('sender_id', Auth::user()->id)
									->where('reciever_id', $this->res_id);
									})->paginate(25);
		return view('usermail.typing')->with('typing', $typing)->with('res_id', $res_id);
	}

	public function postAnswer($answer_id) {

		$ans = Request::input('answer');
		$answers =new Usermail;
		$answers->body = $ans;
		$answers->sender_id = Auth::user()->id;
		$answers->reciever_id = $answer_id;
		$answers->save();
		return redirect()->back();
	}


	public function postNew(Requests\UsermailRequest $request) {
		$request['sender_id'] = Auth::user()->id;
		$rec = User::where('name', $request['recieve_id'])->first();
		if($rec!=null) {
			$request['reciever_id'] = $rec->id;
			$error = null;
		}
		else {
			$error = "Введите корректное имя получателя.";
			
		}
		$request['status_id'] = "sended";
		Usermail::Create($request->all());
		return view('usermail.new_letter')->with('error', $error);

	}

	
}
