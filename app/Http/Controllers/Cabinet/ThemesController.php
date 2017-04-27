<?php
namespace App\Http\Controllers\Cabinet;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Theme;
use App\Group;
use App\Member;
use Input;
use Auth;
use Request;

class ThemesController extends Controller
{
	public function getIndex() {
		$themes = Theme::where('user_id', Auth::user()->id)->get();
		$mygroups = Group::where('user_id', Auth::user()->id)->get();
		
		return view('themes.themes')->with('themes', $themes)->with('mygroups', $mygroups);
	}

	public function getOnetheme($slug) {
		$oneTheme = Theme::latest('slug')->where('slug', '=', $slug)->get();
	 	return view('Themes.oneTheme')->with("oneTheme", $oneTheme);
	}

	public function postAddtheme(Requests\ThemesRequest $request) {
		$request['user_id'] = Auth::user()->id;
		$request['author'] = Auth::user()->name;
		Theme::Create($request->all());
        return redirect("themes");
	}

	public function getDelete($id = NULL) {
		$article = Theme::find($id);
		$article->delete();
		return redirect('themes');
}

	public function postVisibility($theme_id) {
		if(Request::input('visibility')) {
			if(Request::input('visibility') == 'group') {
				$group = Request::input('selected_group');
			}
			else {
				$group = Request::input('visibility');
			}
		}
		$visibl = Theme::find($theme_id);
		$visibl->visible = $group;
		$visibl->save();
		redirect (back());

	}

	public function getEdit($id) {
		$edit_theme = Theme::find($id);
		return view('Themes.edittheme')->with("edit_theme", $edit_theme);
	}

	public function postEdit(Requests\ThemesRequest $request, $id) {
		Theme::find($id)->update($request->all());
		return redirect('themes');
	}

}