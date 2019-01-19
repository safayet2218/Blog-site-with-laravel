<?php

use Illuminate\Database\Seeder;

class SettingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Setting::create([

        	'site_name' =>"laravel's Blog",
        	'address' => 'Bangladesh',
        	'contact_number'=>'01521412218',
        	'contact_email'=>'safayet@gmail.com'

        ]);
    }
}
