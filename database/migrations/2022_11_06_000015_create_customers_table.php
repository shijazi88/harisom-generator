<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomersTable extends Migration
{
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('mobile')->unique();
            $table->string('gender');
            $table->string('status');
            $table->string('email');
            $table->string('referral_code')->unique();
            $table->string('device_type')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
