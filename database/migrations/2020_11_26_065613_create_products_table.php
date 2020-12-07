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
            $table->string('product_id', 20)->primary();
            $table->string('product_name', 50);
            $table->integer('price');
            $table->integer('amount');
            $table->string('brand', 50);
            $table->string('store_id', 20);
            $table->string('type_id', 20);

            $table->foreign('store_id')->references('store_id')->on('stores')->onDelete('cascade');
            $table->foreign('type_id')->references('type_id')->on('type_products')->onDelete('cascade');
        });

        DB::table('products')->insert(
            [
                [
                    'product_id' => 'P001',
                    'product_name' => 'Orange shirt',
                    'price' => 199,
                    'amount' => 10,
                    'brand' => 'niyom',
                    'store_id' => 'ST001',
                    'type_id' => 'T002'
                ],

                [
                    'product_id' => 'P002',
                    'product_name' => 'Red shirt',
                    'price' => 130,
                    'amount' => 3,
                    'brand' => 'niyom',
                    'store_id' => 'ST001',
                    'type_id' => 'T002'
                ],

                [
                    'product_id' => 'P003',
                    'product_name' => 'Point dress',
                    'price' => 520,
                    'amount' => 30,
                    'brand' => 'niyom',
                    'store_id' => 'ST001',
                    'type_id' => 'T001'
                ],

                [
                    'product_id' => 'P004',
                    'product_name' => 'Green shirt',
                    'price' => 333,
                    'amount' => 8,
                    'brand' => 'niyom',
                    'store_id' => 'ST002',
                    'type_id' => 'T002'
                ],

                [
                    'product_id' => 'P005',
                    'product_name' => 'Road Break Dress',
                    'price' => 600,
                    'amount' => 1,
                    'brand' => 'niyom',
                    'store_id' => 'ST002',
                    'type_id' => 'T002'
                ]
            ]
        );
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
