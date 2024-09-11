<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\football_game;

class football_games extends Controller
{
    function stev(){


        return football_game::all();
      
    }
}






    




    

