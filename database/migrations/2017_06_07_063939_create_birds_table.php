<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBirdsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('birds', function(Blueprint $table) {
        $table->increments('id');
        $table->string('head_img');
        $table->string('body_img');
        $table->string('legs_img');
        $table->string('wing_img');
        $table->string('eng_name');
        $table->string('lat_name');
        $table->string('location');
        $table->text('diet');
        $table->timestamps();
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      Schema::dropIfExists('birds');
    }
}
