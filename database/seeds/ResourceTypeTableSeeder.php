<?php

use Illuminate\Database\Seeder;

class ResourceTypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('resource_type')->insert([
            [
                'name' => '菜單',
                'code' => 'MENU',
                'description' => '',
            ],
            [
                'name' => '頁面',
                'code' => 'PAGE',
                'description' => '',
            ],
            [
                'name' => '文件',
                'code' => 'DOC',
                'description' => '',
            ],
        ]);
    }
}
