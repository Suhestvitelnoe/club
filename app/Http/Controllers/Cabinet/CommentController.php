<?php

namespace App\Http\Controllers\Cabinet;

use App\Http\Controllers\Controller;
use App\Comment;
use App\Article;
use App\Http\Requests;

use Request;
use Input;
use Image;
use Auth;


class CommentController extends Controller
{
	public function postComment(Requests\CommentRequest $request, $article_id) {
		$request['user_id'] = Auth::user()->id;
		$request['article_id'] = $article_id;
		Comment::Create($request->all());
		return redirect('articles/onearticle/'.$article_id);
	}

	public function getAllcomments($article_id) {
		$allcomments = Comment::where('article_id', $article_id)->get();

		return view('comments/all_comments')->with('allcomments', $allcomments);

	}

	
	
	
}
