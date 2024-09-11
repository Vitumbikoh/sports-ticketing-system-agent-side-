<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\basketballData;

class BasketballController extends Controller
{
    public function index()
    {
        return view('basketball');
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

        BasketballData::create($validatedData);

        return redirect()->route('basketball.index')->with('success', 'Data has been submitted successfully!');
    }
}
