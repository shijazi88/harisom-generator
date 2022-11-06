<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePackagePeriodsTable extends Migration
{
    public function up()
    {
        Schema::create('package_periods', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->float('discount', 15, 2);
            $table->integer('period_value');
            $table->string('period_label_en');
            $table->string('period_label_ar');
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
