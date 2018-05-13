<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class LandBuilding extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('land_building', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('land_id')->unsigned()->nullable()->default(null);
            $table->integer('building_id')->unsigned()->nullable()->default(null);
            $table->string('description', 200);
            $table->timestamps();
        });
        DB::statement("ALTER TABLE `land_building` comment '土地建物對應表'");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('land_building');
    }
}
