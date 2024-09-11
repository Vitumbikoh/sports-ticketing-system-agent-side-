<?php

namespace App\Http\Controllers;

use App\Models\Game;

use Illuminate\Http\Request;




class  games  extends Controller
{
    

   

public function upload_game(Request $request) {
    $data = new Game;

    $data->leagues = $request->league;
    $data->team_1 = $request->team1;
    $data->team_2 = $request->team2;
    $data->Venue = $request->venue;
    $data->kick_off_time = $request->match_date;

    $data->save(); // Save the data to the database
   
    return redirect()->back();


   // dd($request->all());

    // Redirect or return a response as needed
}

      

}
