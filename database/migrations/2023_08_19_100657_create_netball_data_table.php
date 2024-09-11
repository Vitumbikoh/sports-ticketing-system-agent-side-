<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNetballDataTable extends Migration
{
    /**
     * Run the migrations.
     */
   public function up()
    {
        Schema::create('netball_data', function (Blueprint $table) {
            $table->id();
            $table->string('firstname');
            $table->string('lastname');
            $table->string('league');
            $table->string('team1');
            $table->string('team2');
            $table->string('standname');
            $table->string('standnumber')->unique();
            $table->timestamps();
        });

        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('netball_data');
    }
};



