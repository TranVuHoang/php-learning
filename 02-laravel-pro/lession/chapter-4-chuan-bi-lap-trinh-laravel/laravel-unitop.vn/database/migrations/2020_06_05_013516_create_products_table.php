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
        // bảng products
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            // thêm trường name
            $table->string('name', 200);
            // thêm trường content
            $table->text('content');
            // thêm trường price: và không dấu
            $table->unsignedInteger('price');
            
            // Tạo khóa ngoại user_id kết nối với trường id của bảng users phải để user_id cùng kiểu unsignedBigInteger với trường id của bảng users
            $table->unsignedBigInteger('user_id');

            // Tạo khóa ngoại product_cat_id kết nối với trường id của bảng products phải để product_cat_id cùng kiểu unsignedBigInteger với trường id(products)
            $table->unsignedBigInteger('product_cat_id');

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('product_cat_id')->references('id')->on('products')->onDelete('cascade');
           
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
