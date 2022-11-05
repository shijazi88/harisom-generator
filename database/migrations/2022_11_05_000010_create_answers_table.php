<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnswersTable extends Migration
{
    public function up()
    {
        Schema::create('answers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->longText('answer_en');
            $table->longText('answer_ar');
            $table->integer('value');
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
