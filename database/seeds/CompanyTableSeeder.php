<?php

use Illuminate\Database\Seeder;

class CompanyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('company')->insert([
            // 業務端
            [
                'name' => '立榮',
                'end_point_code' => 'M',
                'description' => '',
                'created_at' => date('Y-m-d 00:00:00'),
            ],
            [
                'name' => '國峯',
                'end_point_code' => 'M',
                'description' => '',
                'created_at' => date('Y-m-d 00:00:00'),
            ],
            // 授信端

            // 估價端
            [
                'name' => '宏邦',
                'end_point_code' => 'A',
                'description' => '',
                'created_at' => date('Y-m-d 00:00:00'),
            ],
            [
                'name' => '環宇',
                'end_point_code' => 'A',
                'description' => '',
                'created_at' => date('Y-m-d 00:00:00'),
            ],
            [
                'name' => '展茂',
                'end_point_code' => 'A',
                'description' => '',
                'created_at' => date('Y-m-d 00:00:00'),
            ],
        ]);
    }
}
