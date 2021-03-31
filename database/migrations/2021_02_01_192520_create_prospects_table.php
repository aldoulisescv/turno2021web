<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProspectsTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prospects', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->unique();
            $table->string('owner')->nullable();
            $table->string('image');
            $table->string('latitude');
            $table->string('longitude');
            $table->string('address');
            $table->string('phone');
            $table->boolean('sent_wa')->default(false);
            $table->string('facebook')->nullable();
            $table->boolean('sent_fb')->default(false);
            $table->string('instagram')->nullable();
            $table->boolean('sent_ig')->default(false);
            $table->string('notes')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('prospects');
    }
}
