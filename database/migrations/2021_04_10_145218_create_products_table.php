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
            $table->integer('collection_id')->nullable();
            $table->integer('shopall_id')->nullable();
            $table->integer('discount')->nullable();
            $table->string('code', 40)->unique();
            $table->string('product_name', 50);
            $table->longText('thumbnail_path')->nullable();
            $table->string('product_desc');
            $table->integer('qty');
            $table->float('price');
            $table->boolean('available')->default(0);
            $table->string('colors');
            $table->dateTime('created_at');
            $table->dateTime('updated_at');
        
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
