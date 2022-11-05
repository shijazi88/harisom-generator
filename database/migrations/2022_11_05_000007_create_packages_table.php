<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePackagesTable extends Migration
{
    public function up()
    {
        Schema::create('packages', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->longText('description')->nullable();
            $table->float('price', 15, 2);
            $table->float('discount', 15, 2);
            $table->string('package_name');
            $table->string('package_type');
            $table->integer('package_period');
            $table->string('package_period_unit');
            $table->string('status');
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
