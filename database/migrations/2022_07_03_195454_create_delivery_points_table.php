<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDeliveryPointsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('delivery_points', function (Blueprint $table) {
            $table->id();
            $table->bigInteger("order_id");
            $table->string('latitude')->nullable();
            $table->string('longitude')->nullable();
            // $table->geometry('address');
            $table->string("location");
            $table->enum("type",['STOP','FROM','TO']);
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
        Schema::dropIfExists('delivery_points');
    }
}
