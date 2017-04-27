<?php
namespace App\Http\Controllers\Cabinet;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Theme;
use App\Comment;
use App\Article;
use Input;
use Auth;


class ArticleController extends Controller
{
	public function getIndex($theme_id=null) {
		if($theme_id==null) {
			$articles = Article::where('user_id', Auth::user()->id)->paginate(10);
			$theme = null;
		}
		else{
			$articles = Article::where('theme_id', $theme_id)->where('user_id', Auth::user()->id )->paginate(10);
			$theme = Theme::where('id', $theme_id)->first();
	}
		return view('articles.allArticles')->with('articles', $articles)->with('theme_id', $theme_id)->with('theme', $theme);
	}

	public function postAdd(Requests\ArticleRequest $request, $theme_id = null) {
		$picture = \App::make('\App\libs\Imag')->url($_FILES['pic']['tmp_name'], '/media/uploads/photos/'.Auth::user()->id.'/',
					Auth::user()->id.'_'.time());
        $request['picture'] = $picture;
		$request['user_id'] = Auth::user()->id;
		$request['theme_id'] = $theme_id;
		if($theme_id != null){
			$group_id = Theme::where('id', $theme_id)->first();
			$request['group_id'] = $group_id->group_id;
		}
		Article::Create($request->all());
        return redirect("articles/index/".$theme_id);
	}
	
	public function getOnearticle($id) {
		$oneArticle = Article::latest('id')->where('id', '=', $id)->first();
		$comments = Comment::where('article_id',$id)->get();
	 	return view('articles.oneArticle')->with("oneArticle", $oneArticle)->with('comments', $comments);
	}

	public function getDelete($id = NULL) {
		$article = Article::find($id);
		$article->delete();
		return redirect('articles');
}

	public function getEdit($id) {
		$article = Article::where('id', $id)->first();
		return view('articles.edit_article')->with('article', $article);
	}

	public function postEdit(Requests\ArticleRequest $request, $id) {
		$article = Article::where('id', $id)->first();
    	Article::find($id)->update($request->all());
    	return redirect('articles');
	}
}
