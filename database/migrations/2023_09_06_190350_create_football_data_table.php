<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFootballDataTable extends Migration
{
    public function up()
    {
        Schema::create('football_data', function (Blueprint $table) {
            $table->id();
            $table->string('firstname');
            $table->string('lastname');
            $table->string('league');
            $table->string('team1');
            $table->string('team2');
            $table->string('standname');
            $table->string('standnumber');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('football_data');
    }
}
