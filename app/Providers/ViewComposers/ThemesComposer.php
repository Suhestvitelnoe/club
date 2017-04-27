<?php
namespace App\Providers\ViewComposers;

use Illuminate\Contracts\View\View;
use App\Comment;
use App\Theme;
use Auth;

class ThemesComposer {
	public function compose(View $view) {
		//$personal = Account::where('user_id', Auth::user()->id)->first();
		$comments = Comment::where('user_id', Auth::user()->id);
        $view->with('comments', $comments);
	}
}