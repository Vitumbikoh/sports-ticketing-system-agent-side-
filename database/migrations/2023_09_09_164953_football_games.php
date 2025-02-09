<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('football_games', function (Blueprint $table) {
            $table->id(); // Auto-incremental primary key
            $table->string('leagues');
            $table->string('team_1');
            $table->string('team_2');
           
            $table->string('Venue');
            $table->string('kick_off_time');
            
           
            $table->timestamps(); // Created_at and updated_at timestamps
        });
    
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
