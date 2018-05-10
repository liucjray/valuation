<?php

use Illuminate\Database\Seeder;

class ResourceTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('resource')->insert([
            [
                'name' => '首頁',
                'path' => '/',
                'action' => '',
                'resource_type_code' => '',
                'description' => '',
            ],
        ]);
    }
}
