<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TeamData;

class TeamDataController extends Controller
{
    // Display all team data records
    public function index()
    {
        $teamData = TeamData::all();
        return view('team_data.index', ['teamData' => $teamData]);
    }

    // Show the form for creating a new team data record
    public function create()
    {
        return view('team_data.create');
    }

    // Store a newly created team data record in the database
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            // Add validation rules for other fields as needed
        ]);

        TeamData::create($validatedData);

        return redirect('/team-data')->with('success', 'Team data created successfully');
    }

    // Show the form for editing a team data record
    public function edit($id)
    {
        $teamData = TeamData::findOrFail($id);
        return view('team_data.edit', ['teamData' => $teamData]);
    }

    // Update the specified team data record in the database
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            // Add validation rules for other fields as needed
        ]);

        $teamData = TeamData::findOrFail($id);
        $teamData->update($validatedData);

        return redirect('/team-data')->with('success', 'Team data updated successfully');
    }

    // Remove the specified team data record from the database
    public function destroy($id)
    {
        $teamData = TeamData::findOrFail($id);
        $teamData->delete();

        return redirect('/team-data')->with('success', 'Team data deleted successfully');
    }
}
