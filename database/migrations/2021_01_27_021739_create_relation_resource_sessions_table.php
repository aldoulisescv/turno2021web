<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRelationResourceSessionsTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('relation_resource_sessions', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('resource_id')->unsigned();
            $table->integer('session_id')->unsigned();
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('resource_id')->references('id')->on('resources');            
            $table->foreign('session_id')->references('id')->on('sessions');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('relation_resource_sessions');
    }
}
