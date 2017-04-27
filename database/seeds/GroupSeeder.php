<?php
use App\Group;
use Illuminate\Database\Seeder;

class GroupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    Group::create(array('name'=>'css','body'=>'талицы стилей ',
	'showhide'=>'show'));
	 Group::create(array('name'=>'html','body'=>'верстка',
	'showhide'=>'show'));
	 Group::create(array('name'=>'web','body'=>'разработка интернет-приложений',
	'showhide'=>'show'));
    }
}
