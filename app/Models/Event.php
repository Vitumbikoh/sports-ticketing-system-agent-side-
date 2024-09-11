<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $table = 'football_games'; // Adjust the table name as needed
    protected $fillable = ['team_1','team_2','Venue','kick_off_time']; // List the fields you want to retrieve
}
