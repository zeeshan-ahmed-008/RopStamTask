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
            $table->string('image');
            $table->string('name');
            $table->integer('category_id');
            $table->enum('currency', ['$', '₹'])->default('₹');
            $table->integer('price')->default(0);
            $table->enum('rent_type', ['Month', 'Year'])->default('Month');
            $table->float('average_ratings', 8, 1)->default(0);
            $table->integer('total_ratings')->default(0);
            $table->integer('total_reviews')->default(0);
            $table->integer('refundable')->default(0);
            $table->string('coupon_code')->nullable();            
            $table->enum('size', ['6x3', '6x4', '6x5', '6x6'])->default('6x3');
            $table->string('tenure')->nullable();
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
