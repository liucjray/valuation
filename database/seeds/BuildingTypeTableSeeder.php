<?php

use Illuminate\Database\Seeder;

class BuildingTypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('building_type')->insert([
            [
                'name' => '透天厝',
                'code' => 'A',
                'description' => '',
                'created_at' => date('Y-m-d 00:00:00'),
            ],
            [
                'name' => '公寓',
                'code' => 'B',
                'description' => '5樓含以下無電梯',
                'created_at' => date('Y-m-d 00:00:00'),
            ],
            [
                'name' => '套房',
                'code' => 'C',
                'description' => '1房(1廳)1衛',
                'created_at' => date('Y-m-d 00:00:00'),
            ],
            [
                'name' => '華廈',
                'code' => 'D',
                'description' => '10層含以下有電梯',
                'created_at' => date('Y-m-d 00:00:00'),
            ],
            [
                'name' => '住宅大樓',
                'code' => 'E',
                'description' => '11層含以上有電梯',
                'created_at' => date('Y-m-d 00:00:00'),
            ],
            [
                'name' => '店面',
                'code' => 'F',
                'description' => '店舖',
                'created_at' => date('Y-m-d 00:00:00'),
            ],
            [
                'name' => '辦公商業大樓',
                'code' => 'G',
                'description' => '',
                'created_at' => date('Y-m-d 00:00:00'),
            ],
            [
                'name' => '工廠',
                'code' => 'H',
                'description' => '',
                'created_at' => date('Y-m-d 00:00:00'),
            ],
            [
                'name' => '廠辦',
                'code' => 'I',
                'description' => '',
                'created_at' => date('Y-m-d 00:00:00'),
            ],
            [
                'name' => '農舍',
                'code' => 'J',
                'description' => '',
                'created_at' => date('Y-m-d 00:00:00'),
            ],
            [
                'name' => '倉庫',
                'code' => 'K',
                'description' => '',
                'created_at' => date('Y-m-d 00:00:00'),
            ],
            [
                'name' => '其他',
                'code' => 'Z',
                'description' => '',
                'created_at' => date('Y-m-d 00:00:00'),
            ],
        ]);
    }
}