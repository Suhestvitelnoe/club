<?php
namespace App\Providers\ViewComposers;

use Illuminate\Contracts\View\View;
use App\Account;
use Auth;

class UserInfoComposer {
	public function compose(View $view, $user_id) {
		 $personal = Account::where('user_id', $user_id)->first();
        $view->with('personal', $personal);
	}
}