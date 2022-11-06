<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVehiclesTable extends Migration
{
    public function up()
    {
        Schema::create('vehicles', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('vehicle_color');
            $table->string('plate_number');
            $table->string('plate_chars');
            $table->string('vehicle_brand');
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
