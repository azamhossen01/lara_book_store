<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrderDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_details', function (Blueprint $table) {
            $table->bigIncrements('id');
<<<<<<< HEAD:database/migrations/2020_02_17_102526_create_order_details_table.php
            $table->unsignedBigInteger('book_id');
            $table->integer('quantity');
=======
            $table->unsignedBigInteger('order_id');
            $table->unsignedBigInteger('book_id');
            $table->integer('qty');
>>>>>>> 46a22ee76f3042288a7e4a17f16eb2fc41dd0c87:database/migrations/2020_02_17_162213_create_order_details_table.php
            $table->float('sub_total');
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
        Schema::dropIfExists('order_details');
    }
}
