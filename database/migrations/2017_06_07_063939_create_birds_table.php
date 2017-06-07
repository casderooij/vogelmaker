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
        $table->string('head_img')->nullable();
        $table->string('body_img')->nullable();
        $table->string('legs_img')->nullable();
        $table->string('wing_img')->nullable();
        $table->string('eng_name')->nullable();
        $table->string('lat_name')->nullable();
        $table->string('location')->nullable();
        $table->text('diet')->nullable();
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
