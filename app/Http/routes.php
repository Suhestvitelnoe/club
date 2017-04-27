<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/


/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware'=>['web','auth']],function(){
	Route::controllers([
		'group'    => 'Cabinet\GroupController',
		"cabinet"  => "Cabinet\CabinetController",
		'themes'   => 'Cabinet\ThemesController',
		'comments' => 'Cabinet\CommentController',
		'articles' => 'Cabinet\ArticleController',
		'musics'   => 'Cabinet\MusicController',
		'friends'  => 'Cabinet\FriendController',
		'usermail' => 'Cabinet\UsermailController',
		'events'   => 'Cabinet\EventController',
		'photos'   => 'Cabinet\PhotoController',
		'search'   => 'SearchController',
		'company'  => 'Cabinet\CompanyController',
		'service'  => 'Cabinet\ServicesController',
		'feedback' => 'Cabinet\FeedbackController',

]);
	 Route::auth();
	 Route::get('/search.results', 'SearchController@getResults');
});


Route::group(['middleware' => ['web',]], function () {
	Route::controllers([
		'groups'			=>'GroupForGuestController',
		'themesForGuest'	=>'ThemesForGuestController',
		'guestmusics'		=>'GuestMusicController',
		'articlesForGuest'	=>'ArticleForGuestController',
		'ajax'				=>'AjaxController',
		'account'			=>'AccountController',
		'guestphotos'		=>'GuestPhotoController',
		'guestcompany' 		=>'GuestCompanyController',
		'guestservices'		=>'GuestServicesController',
		'{id}'				=>'AccountController',
		
		
]);
	Route::auth();
    Route::get('/','BaseController@index');
   });


