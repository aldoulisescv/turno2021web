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
            $table->string('api_token', 255)->unique()->nullable();
            $table->string('user_name')->default('')->unique();	
            $table->string('ref_code')->nullable();
            $table->string('lastname')->nullable();
            $table->string('imagen')->nullable();
            $table->string('phone')->unique();
            $table->date('registration_date')->nullable();
            $table->string('phone_verification')->nullable();
            $table->boolean('terms')->default(false);	
            $table->boolean('privacy_notice')->default(false);
        });

        Schema::table('users', function (Blueprint $table) {	
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
        Schema::table('users', function (Blueprint $table) {
            $table->dropForeign(['establishment_id']);	
            $table->dropColumn('establishment_id');
            $table->dropColumn('enabled');	
            $table->dropColumn('api_token');	
            $table->dropColumn('user_name');	
            $table->dropColumn('ref_code');	
            $table->dropColumn('lastname');	
            $table->dropColumn('phone');	
            $table->dropColumn('terms');	
            $table->dropColumn('privacy_notice');	
            $table->dropColumn('registration_date');
            $table->dropColumn('phone_verification');
        });
    }
}
