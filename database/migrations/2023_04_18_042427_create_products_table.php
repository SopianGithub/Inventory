<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('product_name');
            $table->string('foto_product');
            $table->string('product_id')->unique();
            $table->bigInteger('category_id')->unsigned()->index(); 
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
            $table->double('buying_price');
            $table->integer('quantity')->default(0);
            $table->string('unit');
            $table->date('buying_date')->useCurrent();
            $table->date('expired_date');
            $table->integer('threshold')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
