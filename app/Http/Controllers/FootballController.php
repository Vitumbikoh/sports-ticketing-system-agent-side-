<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FootballData;

class FootballController extends Controller
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
            'game' => 'required|string|max:255',
            'standname' => 'required|string|max:255',
            'standnumber' => 'required|string|max:255',
        ]);

        FootballData::create($validatedData);

        return redirect()->route('football.index')->with('success', 'Data has been submitted successfully!');
    }
}
