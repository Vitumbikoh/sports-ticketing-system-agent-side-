<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FootballData;

class FootballDataController extends Controller
{
    public function index()
    {
        return view('football');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'firstname' => 'required|string|max:255',
            'lastname' => 'required|string|max:255',
            'league' => 'required|string|max:255',
            'team1' => 'required|string|max:255',
            'team2' => 'required|string|max:255',
            'standname' => 'required|string|max:255',
            'standnumber' => 'required|string|max:255',
        ]);

        FootballData::create($validatedData);

        return redirect()->route('football.index')->with('success', 'Football data added successfully!');
    }
}


// namespace App\Http\Controllers;

// use Illuminate\Support\Facades\DB;
// use Illuminate\Http\Request;
// use App\FootballData;
// use App\Models\TeamData;

// class FootballDataController extends Controller
// {
    
//         public function index() : View
//         {
//             $teamNames = DB::table('team_data')->pluck('name');
        
//         foreach ($teamNames as $name) {
//             echo $name;
//         }
//     }



//     public function store(Request $request)
//     {
//         $validatedData = $request->validate([
//             'firstname' => 'required|string|max:255',
//             'lastname' => 'required|string|max:255',
//             'league' => 'required|string|max:255',
//             'team1' => 'required|string|max:255',
//             'team2' => 'required|string|max:255',
//             'standname' => 'required|string|max:255',
//             'standnumber' => 'required|string|max:255',
//         ]);

//         FootballData::create($validatedData);

//         return redirect()->route('football.index')->with('success', 'Football data added successfully!');
//     }
// }