<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTypeProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('type_products', function (Blueprint $table) {
            $table->string('type_id', 20)->primary();
            $table->string('type_name', 50);
        });

        DB::table('type_products')->insert(
            [
                [
                    'type_id' => 'T001',
                    'type_name' => 'Dress'
                ],

                [
                    'type_id' => 'T002',
                    'type_name' => 'T-shirt'
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
        Schema::dropIfExists('type_products');
    }
}
