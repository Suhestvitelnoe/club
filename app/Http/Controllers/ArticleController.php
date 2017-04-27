<?php

namespace App\Http\Controllers;
use App\Article;
use App\Comment;
use App\User;
use Illuminate\Http\Request;


use App\Http\Requests;

class ArticleController extends Controller
{
    public function getIndex(){
		$articles=Article::where('showhide','=','show')->orderBy('id','DESC')->paginate(10);
        $comments = Comment::where('showhide','=','show')->get();
		

		return view('unAuth.allArticlesForGuest')->with('articles',$articles)->with('comments',$comments);
	}
	public function getOnearticle($id){
		  $oneArticle = Article::where('id', '=', $id)->first();
		  $comments = Comment::where('article_id', $id)->get();
		
	 	return view('unAuth.oneArticleForGuest')->with("oneArticle", $oneArticle)->with("comments", $comments);
	
	}
}
