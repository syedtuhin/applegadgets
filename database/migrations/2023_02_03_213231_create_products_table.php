<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id();
            $table->int('product_id');
            $table->name();
            $table->launchData();
            $table->dimensions();
            $table->weight();
            $table->display_size();
            $table->display_resolution();
            $table->memory();
            $table->camera_front();
            $table->camera_backend();
            $table->Battery();
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
        Schema::dropIfExists('products');
    }
}
