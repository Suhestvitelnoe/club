<?php

use Illuminate\Database\Seeder;
use App\ServicesModel;

class ServicesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ServicesModel::create(array('name'=>'Косметические'));
        ServicesModel::create(array('name'=>'Финансовые'));
        ServicesModel::create(array('name'=>'Медицинские'));
        ServicesModel::create(array('name'=>'Образовательные'));
        ServicesModel::create(array('name'=>'Строительные'));
        ServicesModel::create(array('name'=>'Ремонтные'));
        ServicesModel::create(array('name'=>'Фото, Видео'));
        ServicesModel::create(array('name'=>'Перевозки'));
        ServicesModel::create(array('name'=>'Организация Праздников'));
        ServicesModel::create(array('name'=>'Туристические'));
        ServicesModel::create(array('name'=>'Услуги общепита'));
        ServicesModel::create(array('name'=>'Юридические'));
        ServicesModel::create(array('name'=>'Клининговые'));
        ServicesModel::create(array('name'=>'IT-услуги'));
        ServicesModel::create(array('name'=>'Услуги по уходу'));
        ServicesModel::create(array('name'=>'Услуги переводчика'));
        ServicesModel::create(array('name'=>'Услуги журналиста'));
        ServicesModel::create(array('name'=>'Услуги для дачи'));
    }
}
