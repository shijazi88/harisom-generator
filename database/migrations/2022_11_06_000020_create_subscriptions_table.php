<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubscriptionsTable extends Migration
{
    public function up()
    {
        Schema::create('subscriptions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->float('price', 15, 2)->nullable();
            $table->longText('instructions')->nullable();
            $table->string('payment_method')->nullable();
            $table->string('status')->nullable();
            $table->string('coupon')->nullable();
            $table->float('discount', 15, 2)->nullable();
            $table->longText('details')->nullable();
            $table->datetime('start_date')->nullable();
            $table->datetime('endt_date')->nullable();
            $table->string('selected_hour')->nullable();
            $table->string('service_time')->nullable();
            $table->string('selected_days')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
