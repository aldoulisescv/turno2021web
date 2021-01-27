<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFieldsToUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->boolean('enabled')->default(true);
            $table->integer('establishment_id')->nullable()->unsigned();	
            $table->integer('role_id')->nullable()->unsigned();
            $table->string('api_token', 60)->unique()->nullable();
            $table->string('username')->unique();
            $table->string('lastname')->unique()->nullable();
            $table->string('phone')->unique();
            $table->date('reegistration_date');
            $table->string('phone_verificatin')->nullable();
            $table->boolean('terms')->default(true);	
            $table->boolean('privacy_notice')->default(true);
        });

        Schema::table('users', function (Blueprint $table) {	
            $table->foreign('establishment_id')->references('id')->on('establishments');
            $table->foreign('role_id')->references('id')->on('roles');	
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropForeign(['establishment_id']);	
            $table->dropForeign(['role_id']);
            $table->dropColumn('enabled');	
            $table->dropColumn('api_token');	
            $table->dropColumn('username');	
            $table->dropColumn('lastname');	
            $table->dropColumn('phone');	
            $table->dropColumn('terms');	
            $table->dropColumn('privacy_notice');	
            $table->dropColumn('reegistration_date');
            $table->dropColumn('phone_verificatin');
        });
    }
}
