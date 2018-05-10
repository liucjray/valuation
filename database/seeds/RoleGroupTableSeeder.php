<?php

use Illuminate\Database\Seeder;

class RoleGroupTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('role_group')->insert([
            // ADMIN
            [
                'name' => '網站管理群',
                'code' => 'S',
                'description' => '',
                'created_at' => date('Y-m-d 00:00:00'),
            ],

            // 其他端點
            [
                'name' => '業務端',
                'code' => 'M', //Marketing
                'description' => '房貸業務來源，透過系統可以直接匯入申請物件地籍資料，並向估價端提出預估、估價報告書之申請。',
                'created_at' => date('Y-m-d 00:00:00'),
            ],
            [
                'name' => '估價端',
                'code' => 'A', //Appraisal
                'description' => '接受業務端之申請，透過不動產交易資料庫之協助完成預估、估價報告書。',
                'created_at' => date('Y-m-d 00:00:00'),
            ],
            [
                'name' => '授信端',
                'code' => 'C', //Credit
                'description' => '對於預估或是估價報告書執行線上檢視或文件下載。',
                'created_at' => date('Y-m-d 00:00:00'),
            ],
        ]);
    }
}
