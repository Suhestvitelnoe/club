<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Theme;
use App\Article;
use App\Comment;
use Input;
use Auth;

class ThemesForGuestController extends Controller
{
	public function getIndex() {
		$themes=Theme::where('showhide','=','show')->where('group_id', "0")->orderBy('id','DESC')->paginate(10);
		return view('unAuth.themesForGuest')->with('themes',$themes);
	}

	public function getArticle($theme_id=null) {
		$articles = Article::where('theme_id', $theme_id)->paginate(3);
	    $one=Theme::find($theme_id);
		return view('unAuth.allArticlesForGuest')->with('articles', $articles)->with('one',$one);
	}

	public function getOnearticle($id=null) {
		$oneArticle = Article::where('id', '=', $id)->first();
		$comments = Comment::where('article_id',$id)->get();
	 	return view('unAuth.oneArticleForGuest')->with("oneArticle", $oneArticle)->with('comments', $comments);
	}	
}
