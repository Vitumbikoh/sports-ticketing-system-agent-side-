<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HockeyData;

class HockeyController extends Controller
{
    public function index()
    {
        return view('hockey');
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

        HockeyData::create($validatedData);

        return redirect()->route('hockey.index')->with('success', 'Data has been submitted successfully!');
    }
}
