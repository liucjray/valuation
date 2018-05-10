<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('user')->insert([
            [
                'name' => 'ray',
                'email' => 'ray@gmail.com',
                'password' => bcrypt('secret'),
            ],
            [
                'name' => 'kelly',
                'email' => 'kelly@gmail.com',
                'password' => bcrypt('secret'),
            ],
            [
                'name' => 'alfie',
                'email' => 'alfie@gmail.com',
                'password' => bcrypt('secret'),
            ],
        ]);
    }
}
