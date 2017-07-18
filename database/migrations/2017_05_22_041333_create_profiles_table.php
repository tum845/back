<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProfilesTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->string('profile_province')->nullable();
            $table->string('profile_regency')->nullable();
            $table->string('profile_district')->nullable();
            $table->mediumText('profile_address');
            $table->date('profile_birthday')->nullable();
            $table->char('profile_genre')->nullable();
            $table->string('profile_job')->nullable();
            $table->double('profile_latitude');
            $table->double('profile_longitude');
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('profiles');
    }
}
