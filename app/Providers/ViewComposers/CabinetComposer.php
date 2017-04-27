<?php
namespace App\Providers\ViewComposers;

use Illuminate\Contracts\View\View;
use App\Account;
use Auth;

class CabinetComposer {
	public function compose(View $view) {
		
		$personal = Account::where('user_id', Auth::user()->id)->first();
		 
        if(!$personal) {
            $personal = new Account();
        }
       
        $view->with('personal', $personal);
	}
}