<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class BuildingType extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('building_type', function (Blueprint $table) {
            $table->increments('id');
            $table->string('code')->nullable()->default(null);
            $table->string('name', 10);
            $table->string('description', 200)->nullable()->default(null);;
            $table->timestamps();
        });
        DB::statement("ALTER TABLE `building_type` comment '建物類型表'");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('building_type');
    }
}
