<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToPackagePeriodsTable extends Migration
{
    public function up()
    {
        Schema::table('package_periods', function (Blueprint $table) {
            $table->unsignedBigInteger('package_id')->nullable();
            $table->foreign('package_id', 'package_fk_7578114')->references('id')->on('packages');
        });
    }
}
