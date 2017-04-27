<?php
namespace App\Providers\ViewComposers;

use Illuminate\Contracts\View\View;

class SiteComposer {
	public function compose(View $view) {
		$url = $_SERVER['REQUEST_URI'];
		$panelHeading = 1;
		$view->with('url', $url)->with('panelHeading', $panelHeading);

	}
}