<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCuponsTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cupons', function (Blueprint $table) {
            $table->increments('id');
            $table->string('cupon_code')->unique();
            $table->char('cupon_object');
            $table->char('cupon_type');
            $table->decimal('cupon_nominal',12,2)->nullable();
            $table->boolean('cupon_is_recuring');
            $table->date('cupon_start');
            $table->date('cupon_end');
            $table->text('cupon_description');
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
        Schema::drop('cupons');
    }
}
