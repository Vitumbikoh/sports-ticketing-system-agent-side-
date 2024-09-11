<?php

namespace App\Http\Controllers;

use App\Models\netball_data;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //
    public function index()
    {
        $totalTicketsSold = netball_data::count();

        $thisMonth = Carbon::now()->format('m');

        $thisMonth = netball_data::WhereMonth('created_at', $thisMonth)->count();

        return view('dashboard', compact('totalTicketsSold', '$totalTicketsSold', '$thisMonth'));


    }
}
