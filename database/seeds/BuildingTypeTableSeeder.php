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
            /**
             * 透天厝
             */
            [
                'name' => '透天厝',
                'code' => '1',
                'description' => '多為單一(或多筆)建號坐落於一筆(或多筆)地號，且其中至少一筆土地其持分為全部。',
                'created_at' => date('Y-m-d 00:00:00'),
            ],
            [
                'name' => '農舍',
                'code' => '11',
                'description' => '',
                'created_at' => date('Y-m-d 00:00:00'),
            ],
            [
                'name' => '倉庫',
                'code' => '12',
                'description' => '',
                'created_at' => date('Y-m-d 00:00:00'),
            ],
            [
                'name' => '工廠',
                'code' => '13',
                'description' => '',
                'created_at' => date('Y-m-d 00:00:00'),
            ],
            [
                'name' => '廠房',
                'code' => '14',
                'description' => '',
                'created_at' => date('Y-m-d 00:00:00'),
            ],

            /**
             * 社區型透天
             */
            [
                'name' => '社區型透天',
                'code' => '2',
                'description' => '',
                'description' => '單一建號(或含有公設建號持分)，且對應地號(一筆或多筆)可能都是以持分方式為主(非全部)。',
                'created_at' => date('Y-m-d 00:00:00'),
            ],

            /**
             * 集合住宅類型
             */
            [
                'name' => '集合住宅類型',
                'code' => '3',
                'description' => '單一或多筆建號(多數含有公設) ，且對應地號(一筆或多筆)可能都是以持分方式為主(非全部)。',
                'created_at' => date('Y-m-d 00:00:00'),
            ],
            [
                'name' => '公寓',
                'code' => '31',
                'description' => '',
                'created_at' => date('Y-m-d 00:00:00'),
            ],
            [
                'name' => '華廈',
                'code' => '32',
                'description' => '',
                'created_at' => date('Y-m-d 00:00:00'),
            ],
            [
                'name' => '住宅大樓',
                'code' => '33',
                'description' => '',
                'created_at' => date('Y-m-d 00:00:00'),
            ],
            [
                'name' => '辦公商業大樓',
                'code' => '34',
                'description' => '',
                'created_at' => date('Y-m-d 00:00:00'),
            ],
            [
                'name' => '套房',
                'code' => '35',
                'description' => '',
                'created_at' => date('Y-m-d 00:00:00'),
            ],
        ]);
    }
}
