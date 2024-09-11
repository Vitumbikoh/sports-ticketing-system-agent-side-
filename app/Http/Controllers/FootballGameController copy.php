<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FootballGameController extends Controller
{
   
    public function addGamesView()
{
    //$footballGames = DB::table('football_games')->get(); // Retrieve all football games from the database
    $allGames = Event::all();


   return view('add-games',compact('allGames'));
 //  dd($allGames);
}

}
