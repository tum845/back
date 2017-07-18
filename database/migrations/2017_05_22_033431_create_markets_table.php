<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMarketsTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('markets', function (Blueprint $table) {
            $table->increments('id');
            $table->string('market_name');
            $table->string('market_slug')->unique();
            $table->string('market_icon')->nullable();
            $table->string('market_country')->nullable();
            $table->string('market_province')->nullable();
            $table->string('market_regency')->nullable();
            $table->string('market_district')->nullable();
            $table->text('market_location');
            $table->double('market_latitude');
            $table->double('market_longitude');
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
        Schema::drop('markets');
    }
}
