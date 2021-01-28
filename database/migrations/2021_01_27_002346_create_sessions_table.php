<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSessionsTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sessions', function (Blueprint $table) {
            $table->increments('id');
            $table->boolean('enabled')->default(true);
            $table->integer('establishment_id')->unsigned();
            $table->string('name');
            $table->string('duration');
            $table->float('cost');
            $table->integer('max_days_schedule');
            $table->integer('max_hours_schedule');
            $table->integer('max_minutes_schedule');
            $table->integer('min_days_schedule');
            $table->integer('min_hours_schedule');
            $table->integer('min_minutes_schedule');
            $table->time('standby_time');
            $table->time('time_btwn_session');
            $table->date('end_date')->nullable();
            $table->timestamps();
            $table->softDeletes();            
            $table->foreign('establishment_id')->references('id')->on('establishments');

            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('sessions');
    }
}
