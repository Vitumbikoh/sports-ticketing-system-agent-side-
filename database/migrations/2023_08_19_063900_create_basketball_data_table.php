<?php

// database/migrations/xxxx_xx_xx_create_basketball_data_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBasketballDataTable extends Migration
{
    public function up()
    {
        Schema::create('basketball_data', function (Blueprint $table) {
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
        Schema::dropIfExists('basketball_data');
    }
}
