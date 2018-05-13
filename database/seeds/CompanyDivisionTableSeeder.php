<?php

use Illuminate\Database\Seeder;

class CompanyDivisionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('company_division')->insert([
            [
                'name' => '立榮',
                'company_id' => 1,
                'description' => null,
                'created_at' => date('Y-m-d 00:00:00'),
            ],
            [
                'name' => '國峯台北',
                'company_id' => 2,
                'description' => null,
                'created_at' => date('Y-m-d 00:00:00'),
            ],
            [
                'name' => '國峯台中',
                'company_id' => 2,
                'description' => null,
                'created_at' => date('Y-m-d 00:00:00'),
            ],
            [
                'name' => '宏邦台北',
                'company_id' => 3,
                'description' => null,
                'created_at' => date('Y-m-d 00:00:00'),
            ],
            [
                'name' => '宏邦台中',
                'company_id' => 3,
                'description' => null,
                'created_at' => date('Y-m-d 00:00:00'),
            ],
            [
                'name' => '環宇台北',
                'company_id' => 4,
                'description' => null,
                'created_at' => date('Y-m-d 00:00:00'),
            ],
            [
                'name' => '環宇桃園',
                'company_id' => 4,
                'description' => null,
                'created_at' => date('Y-m-d 00:00:00'),
            ],
            [
                'name' => '環宇台中',
                'company_id' => 4,
                'description' => null,
                'created_at' => date('Y-m-d 00:00:00'),
            ],
            [
                'name' => '展茂台南',
                'company_id' => 5,
                'description' => null,
                'created_at' => date('Y-m-d 00:00:00'),
            ],
            [
                'name' => '展茂高雄',
                'company_id' => 5,
                'description' => null,
                'created_at' => date('Y-m-d 00:00:00'),
            ],
            [
                'name' => '展茂台中',
                'company_id' => 5,
                'description' => null,
                'created_at' => date('Y-m-d 00:00:00'),
            ],
            [
                'name' => '展茂台北',
                'company_id' => 5,
                'description' => null,
                'created_at' => date('Y-m-d 00:00:00'),
            ],
        ]);
    }
}
