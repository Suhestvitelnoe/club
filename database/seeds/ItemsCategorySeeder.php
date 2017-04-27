<?php

use Illuminate\Database\Seeder;
use App\CompanyCategory;

class ItemsCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        CompanyCategory::create(array('name'=>'Авто'));
        CompanyCategory::create(array('name'=>'Одежда'));
        CompanyCategory::create(array('name'=>'Компьютеры'));
        CompanyCategory::create(array('name'=>'Мебель'));
        CompanyCategory::create(array('name'=>'Бытовая техника'));
        CompanyCategory::create(array('name'=>'Недвижимость'));
        CompanyCategory::create(array('name'=>'Товары для дачи'));
        CompanyCategory::create(array('name'=>'Игрушки'));
        CompanyCategory::create(array('name'=>'Музыкальные'));
        
    }
}
