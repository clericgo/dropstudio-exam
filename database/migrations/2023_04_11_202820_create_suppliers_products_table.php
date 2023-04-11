<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('suppliers_products', function (Blueprint $table) {
            $table->id();
            $table->datetime('created_at', $precision = 0);
            $table->datetime('updated_at', $precision = 0);
            $table->datetime('deleted_at', $precision = 0); 
            $table->foreign('product_id')->references('id')->on('products');
            $table->foreign('supply_id')->references('id')->on('suppliers');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('suppliers_products');
    }
};
