<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    protected $table = 'football_games'; // Set the table name if it's different from the default naming convention

    protected $fillable = [
        'leagues',
        'team_1',
        'team_2',
        'Venue',
        'kick_off_time',
    ];

    // You can also define any relationships, additional methods, or other model-specific configurations here.
}
