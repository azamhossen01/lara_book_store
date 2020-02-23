<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('customer_id');
            $table->unsignedBigInteger('shipping_id');
<<<<<<< HEAD:database/migrations/2020_02_17_102457_create_orders_table.php
            $table->float('total');
=======
            $table->float('total')->nullable();
            $table->integer('payment_method')->comment('0=cash on delivery, 1=bkash payment'); 
            $table->string('transaction_id')->nullable();
>>>>>>> 46a22ee76f3042288a7e4a17f16eb2fc41dd0c87:database/migrations/2020_02_17_162147_create_orders_table.php
            $table->integer('status')->default(0);
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
        Schema::dropIfExists('orders');
    }
}
