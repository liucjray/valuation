<?php

use Illuminate\Database\Seeder;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('role')->insert([

            // 管理員
            [
                'role_group_code' => 'S',
                'name' => '網站管理員',
                'description' => '',
                'created_at' => date('Y-m-d 00:00:00'),
            ],

            // 業務端
            [
                'role_group_code' => 'M',
                'name' => '房貸業務主管',
                'description' => '',
                'created_at' => date('Y-m-d 00:00:00'),
            ],
            [
                'role_group_code' => 'M',
                'name' => '房貸業務',
                'description' => '',
                'created_at' => date('Y-m-d 00:00:00'),
            ],

            // 估價端
            [
                'role_group_code' => 'A',
                'name' => '會計',
                'description' => '',
                'created_at' => date('Y-m-d 00:00:00'),
            ],
            [
                'role_group_code' => 'A',
                'name' => '審核',
                'description' => '',
                'created_at' => date('Y-m-d 00:00:00'),
            ],
            [
                'role_group_code' => 'A',
                'name' => '資深估價人員',
                'description' => '',
                'created_at' => date('Y-m-d 00:00:00'),
            ],
            [
                'role_group_code' => 'A',
                'name' => '估價人員',
                'description' => '',
                'created_at' => date('Y-m-d 00:00:00'),
            ],
            [
                'role_group_code' => 'A',
                'name' => '業務',
                'description' => '',
                'created_at' => date('Y-m-d 00:00:00'),
            ],
            [
                'role_group_code' => 'A',
                'name' => '業務助理',
                'description' => '',
                'created_at' => date('Y-m-d 00:00:00'),
            ],
        ]);
    }
}
