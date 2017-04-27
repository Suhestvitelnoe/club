<?php

use Illuminate\Database\Seeder;
use App\MusicCategory;

class MusicCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        MusicCategory::create(array('name'=>'Рок'));
        MusicCategory::create(array('name'=>'Поп'));
        MusicCategory::create(array('name'=>'Электро'));
        MusicCategory::create(array('name'=>'Техно'));
        MusicCategory::create(array('name'=>'Классика'));
        MusicCategory::create(array('name'=>'Клубная'));
        MusicCategory::create(array('name'=>'Шансон'));
        MusicCategory::create(array('name'=>'Без слов'));
        MusicCategory::create(array('name'=>'Инструментальная'));
        MusicCategory::create(array('name'=>'Саундтреки'));
        MusicCategory::create(array('name'=>'Национальная'));
        MusicCategory::create(array('name'=>'Медленные'));
        MusicCategory::create(array('name'=>'Джаз'));
        MusicCategory::create(array('name'=>'Блюз'));
        MusicCategory::create(array('name'=>'Транс'));
        
    }
}
