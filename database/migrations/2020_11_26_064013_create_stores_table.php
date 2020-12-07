<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stores', function (Blueprint $table) {
            $table->string('store_id', 20)->primary();
            $table->string('store_name', 50);
            $table->string('owner_name', 50);
            $table->string('tel', 20);
            $table->string('address', 256);
        });

        DB::table('stores')->insert(
            [
                [
                    'store_id' => 'ST001',
                    'store_name' => 'RungRing Store',
                    'owner_name' => 'Sutheemon',
                    'tel' => '099-213-2564',
                    'address' => 'yyy'
                ],

                [
                    'store_id' => 'ST002',
                    'store_name' => 'Warin Store',
                    'owner_name' => 'Warin',
                    'tel' => '02-578-6985',
                    'address' => 'Bangkok'
                ],

                [
                    'store_id' => 'ST003',
                    'store_name' => 'Ploy Store',
                    'owner_name' => 'Ploypilin',
                    'tel' => '099-478-0000',
                    'address' => 'Rayong'
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
        Schema::dropIfExists('stores');
    }
}
