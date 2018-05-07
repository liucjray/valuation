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
            [
                'name' => '業務端公司',
                'description' => '',
                'created_at' => date('Y-m-d 00:00:00'),
            ],
            [
                'name' => '估價端公司',
                'description' => '',
                'created_at' => date('Y-m-d 00:00:00'),
            ],
            [
                'name' => '授信端公司',
                'description' => '',
                'created_at' => date('Y-m-d 00:00:00'),
            ],
        ]);
    }
}
