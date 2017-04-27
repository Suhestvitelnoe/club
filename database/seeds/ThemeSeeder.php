<?php
use App\Theme;
use Illuminate\Database\Seeder;

class ThemeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Theme::create(array('keywords'=>'laravel','showhide'=>'show','name'=>'laravel','description'=>'Большинство маршрутов (routes) вашего приложения будут определены в файле app/Http/routes.php, который загружается классом App\Providers\RouteServiceProvider. В Laravel, простейший маршрут принимает URI (путь) и функцию-замыкание.',
	));
	 Theme::create(array('keywords'=>'laravel','showhide'=>'show','name'=>'laravel','description'=>'HTML-формы не поддерживают действия PUT, PATCH и DELETE. Поэтому при определении маршрутов PUT, PATCH и DELETE, вызываемых из HTML-формы, вам надо добавить в неё скрытое поле _method.',
	));
    }
}
