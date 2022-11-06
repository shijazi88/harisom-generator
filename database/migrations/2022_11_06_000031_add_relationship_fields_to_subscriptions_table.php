<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToSubscriptionsTable extends Migration
{
    public function up()
    {
        Schema::table('subscriptions', function (Blueprint $table) {
            $table->unsignedBigInteger('customer_id')->nullable();
            $table->foreign('customer_id', 'customer_fk_7580058')->references('id')->on('customers');
            $table->unsignedBigInteger('package_id')->nullable();
            $table->foreign('package_id', 'package_fk_7580059')->references('id')->on('packages');
            $table->unsignedBigInteger('address_id')->nullable();
            $table->foreign('address_id', 'address_fk_7580060')->references('id')->on('customer_addresses');
            $table->unsignedBigInteger('vehicle_id')->nullable();
            $table->foreign('vehicle_id', 'vehicle_fk_7580061')->references('id')->on('vehicles');
            $table->unsignedBigInteger('selected_period_id')->nullable();
            $table->foreign('selected_period_id', 'selected_period_fk_7580073')->references('id')->on('package_periods');
        });
    }
}
