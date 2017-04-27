<?php
namespace App\Providers\ViewComposers;

use Illuminate\Contracts\View\View;
use App\Photocat;
use Auth;

class PhotocatComposer {
	public function compose(View $view) {
		
		$cat = Photocat::where('showhide', 'show')->get();
        $view->with('cat', $cat);
	}
}