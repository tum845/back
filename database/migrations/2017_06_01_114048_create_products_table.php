<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProductsTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->string('product_name');
            $table->string('product_image')->nullable();
            $table->decimal('product_price_market',12, 2);
            $table->decimal('product_price_sale',12, 2);
            $table->decimal('product_price_promo',12, 2)->nullable();
            $table->integer('product_stock');
            $table->char('product_status');
            $table->mediumText('product_description');
            $table->integer('market_id')->unsigned();
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('market_id')->references('id')->on('markets');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('products');
    }
}
