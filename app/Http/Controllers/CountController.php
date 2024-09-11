<?php


namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\NetballData;
use App\Models\FootballData;
use App\Models\TennisData;
use App\Models\HockeyData;
use App\Models\VolleyballData;
use App\Models\BasketballData;
use App\Notifications\DataSubmittedNotification;


class NetballController extends Controller
{
    public function index()
    {
        return view('netball');
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
        'standnumber' => 'required|string|max:255|unique:netball_data,standnumber', // Unique validation rule
    ]);

        // NetballData::create($validatedData);
        try {
        $data = new NetballData($validatedData);
        $data->save();

        $user = Auth::user(); // Adjust this to get the appropriate user
        $user->notify(new DataSubmittedNotification($validatedData));

        return redirect()->route('netball.index')->with('success', 'Data has been submitted successfully!');
    } catch (QueryException $e) {
        if ($e->errorInfo[1] === 1062) { // MySQL error code for duplicate entry
            return redirect()->route('netball.index')->with('error', 'The selected seat is already taken. Please choose another seat.');
        } else {
            // Handle other query exceptions or log the error for debugging
            return redirect()->route('netball.index')->with('error', 'An error occurred while submitting the data.');
        }
    }

}

    public function dashboardGraph()
{
    // Fetch the data from the database and group it by month
    $monthlyCounts = DB::table('netball_data')
        ->select(DB::raw('DATE_FORMAT(created_at, "%Y-%m") as month'), DB::raw('COUNT(*) as count'))
        ->groupBy('month')
        ->orderBy('month')
        ->get();

    // Prepare data for the graph
    $labels = [];
    $data = [];

    // Initialize data for each month
    foreach (range(1, 12) as $month) {
        $monthLabel = date("F", mktime(0, 0, 0, $month, 1));
        $labels[] = $monthLabel;
        $data[] = 0; // Initialize to 0
    }

    // Populate data based on the fetched counts
    foreach ($monthlyCounts as $row) {
        $monthIndex = (int)substr($row->month, -2) - 1; // Extract month index (1-12)
        $data[$monthIndex] = $row->count;
    }

    // Pass data to the view
    return view('dashboard', ['labels' => json_encode($labels), 'data' => json_encode($data)]);
}


        public function showTotalNetballRows()
    {
        $totalRows = NetballData::count();

        // Pass the count to the view and render it
        return view('posts.total', ['totalRows' => $totalRows]);
    }

    public function dashboard()
    {
        // Fetch the total number of rows from the NetballData model
        $totalRows = NetballData::count(); // Example query, adjust as needed

        // Pass $totalRows to the dashboard view
        return view('dashboard', ['totalRows' => $totalRows]);
    }

    public function countTotalRows()
{
    // Fetch the total number of rows from the NetballData model
    $totalRows1 = NetballData::count(); // Example query, adjust as needed

    // Calculate the total count from multiple tables
    $totalRows2 = FootballData::count(); // Example query for the second table
    $totalRows3 = HockeyData::count(); // Example query for the third table
    $totalRows4 = BasketballData::count(); // Example query for the fourth table
    $totalRows5 = VolleyballData::count(); // Example query for the fifth table
    $totalRows6 = TennisData::count(); // Example query for the sixth table

    // Calculate the total count by summing the individual counts
    $totalCount = $totalRows1 + $totalRows2 + $totalRows3 + $totalRows4 + $totalRows5 + $totalRows6;

    $subCount = 5000 - $totalCount;

    // Pass both $totalCount and $subCount to the dashboard view
    return view('dashboard', ['totalCount' => $totalCount, 'subCount' => $subCount]);
}

}
