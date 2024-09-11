<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
        use App\Models\TeamData;

class TeamController extends Controller
{
    //
            

public function index()
        {
            $teamData = TeamData::pluck('name', 'id'); // Assuming you want to populate a dropdown with 'name' values.
            return view('form', compact('teamData'));
        }


                public function store(Request $request)
        {
            $selectedTeamId = $request->input('team_name');
            
            // Perform actions with the selected team ID, such as saving it to the database.
            
            return redirect('/team-data')->with('success', 'Team selected successfully');
        }


}


