<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWorkerAddressesTable extends Migration
{
    public function up()
    {
        Schema::create('worker_addresses', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->float('home_lat', 15, 2);
            $table->float('home_lng', 15, 2);
            $table->longText('location_info');
            $table->longText('address_extra_details');
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
