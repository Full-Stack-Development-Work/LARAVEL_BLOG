<?php

use Illuminate\Database\Seeder;

class SettingTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Setting::create([
            'name' => 'Example.com',
            'copyright' => 'Copyright ©2014-2019.All rights reserved',
        ]);
    }
}
