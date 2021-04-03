<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTurnosTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('turnos', function (Blueprint $table) {
            $table->increments('id');
            $table->biginteger('user_id');
            $table->string('email');
            $table->string('phone');
            $table->integer('establishment_id')->unsigned();
            $table->integer('resource_id')->unsigned();
            $table->integer('session_id')->unsigned();
            $table->integer('status_turno_id')->unsigned();
            $table->date('date');
            $table->time('start_time');
            $table->time('end_time');
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('establishment_id')->references('id')->on('establishments');
            $table->foreign('resource_id')->references('id')->on('resources');
            $table->foreign('session_id')->references('id')->on('sessions');
            $table->foreign('status_turno_id')->references('id')->on('status_turnos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('turnos');
    }
}
