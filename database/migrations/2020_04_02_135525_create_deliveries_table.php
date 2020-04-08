<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDeliveriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('deliveries', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('tracking_num')->nullable()->unique();
            $table->string('origin');
            $table->string('destination');
            $table->string('daysIntransit');
            $table->string('DeliveredWith');
            $table->string('CurrentLocation');
            $table->float('Lng');
            $table->float('Lat');
            $table->string('Phone');
            $table->string('orderEmail');
            $table->string('RFullName')->nullable();
            $table->boolean('OrderStatus');
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
        Schema::dropIfExists('deliveries');
    }
}
