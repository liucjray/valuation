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
            CompanyTableSeeder::class,
            CompanyDivisionTableSeeder::class,
            BuildingTypeTableSeeder::class,
        ]);
    }
}
