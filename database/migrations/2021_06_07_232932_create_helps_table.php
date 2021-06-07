<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHelpsTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('helps', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('status_help_id')->unsigned();
            $table->biginteger('user_id');
            $table->string('help_type');
            $table->string('description');
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('status_help_id')->references('id')->on('status_turnos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('helps');
    }
}
