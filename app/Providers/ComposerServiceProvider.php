<?php

namespace App\Providers;

use View;
use Illuminate\Support\ServiceProvider;

class ComposerServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        
        View::composer(array('cabinet.*', 'themes.*', 'Articles.*', 'usermail.*'), 'App\Providers\ViewComposers\CabinetComposer');

       View::composer('photos.includes.category', 'App\Providers\ViewComposers\PhotocatComposer');

        View::composer('*', 'App\Providers\ViewComposers\SiteComposer');

    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
