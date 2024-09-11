<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VolleyballData extends Model
{
    use HasFactory;

    protected $fillable = ['firstname', 'lastname', 'league', 'team1', 'team2', 'standname', 'standnumber'];
}
