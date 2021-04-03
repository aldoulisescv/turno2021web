<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEstablishmentsTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('establishments', function (Blueprint $table) {
            $table->increments('id');
            $table->boolean('enabled')->default(true);
            $table->integer('category_id')->unsigned();
            $table->string('subcategory_id');
            $table->string('name');
            $table->string('logo');
            $table->integer('stepping');
            $table->string('street');
            $table->string('num_ext');
            $table->string('num_int')->nullable();
            $table->string('postal_code');
            $table->string('zone');
            $table->string('city');
            $table->string('state');
            $table->string('country');
            $table->string('latitude');
            $table->string('longitude');
            $table->string('email');
            $table->string('phone');
            $table->string('holidays_extra')->nullable();
            $table->boolean('holidays_official')->default(true);
            $table->boolean('help_tooltip')->default(true);
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('category_id')->references('id')->on('categories');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('establishments');
    }
}
