<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id();
            $table->string('parcel_name');
            $table->string("sender_name");
            $table->string("sender_email");
            $table->string("current_location")->nullable();
            $table->string("tracking_number");
            $table->double("amount_paid",8,5);
            $table->string("status");
            $table->string('image')->default('default.png');
            $table->timestamp('order_date')->nullable();
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
