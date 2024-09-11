<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeamDataTable extends Migration
{
    public function up()
    {
        Schema::create('team_data', function (Blueprint $table) {
            $table->id(); // Auto-incremental primary key
            $table->string('name'); 
            $table->timestamps(); // Created_at and updated_at columns
        });
    }

    public function down()
    {
        Schema::dropIfExists('team_data');
    }
}
