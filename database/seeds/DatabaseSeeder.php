<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            EndPointTableSeeder::class,
            CompanyTableSeeder::class,
            CompanyDivisionTableSeeder::class,
            UserTableSeeder::class,
            RoleTableSeeder::class,
            BuildingTypeTableSeeder::class,
        ]);
    }
}
