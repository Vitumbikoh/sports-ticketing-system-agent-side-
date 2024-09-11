<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TennisController;
use App\Http\Controllers\NetballController;
use App\Http\Controllers\FootballController;
use App\Http\Controllers\FootballDataController;
use App\Http\Controllers\BasketballController;
use App\Http\Controllers\HockeyController;
use App\Http\Controllers\VolleyballController;
use App\Http\Controllers\games;
use App\Http\Controllers\FootballGameController;
use App\Http\Controllers\CountController;
use App\Http\Controllers\PostController;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('auth/login');
});

Route::get('/netball', function(){
    return view('netball');
});

Route::get('/volleyball', function(){
    return view('volleyball');
});

Route::get('/basketball', function(){
    return view('basketball');
});

Route::get('/football', function(){
    return view('football');
});

Route::get('/tennis', function(){
    return view('tennis');
});


// route::get('/', [MailController::class, 'sendMail']);
Route::get('/chart', [ChartController::class, 'index'])->name('chart.index');

Route::get('/netball', [NetballController::class, 'index'])->name('netball.index');
Route::post('/nettball', [NetballController::class, 'store'])->name('netball.store');

// Route::get('/netball', 'NetballController@index')->name('netball.index');
// Route::post('/netball/store', 'NetballController@store')->name('netball.store');

// Define a route for generating barcodes
Route::get('/generate-barcode/{content}', [NetballController::class, 'generateBarcode'])->name('generateBarcode');

Route::get('/barcode.index', [NetballController::class, 'index']);

Route::get('/football', [FootballController::class, 'index'])->name('football.index');
Route::post('/football', [FootballController::class, 'store'])->name('football.store');

Route::get('/volleyball', [VolleyballController::class, 'index'])->name('volleyball.index');
Route::post('/volleyball', [VolleyballController::class, 'store'])->name('volleyball.store');

Route::get('/hockey', [HockeyController::class, 'index'])->name('hockey.index');
Route::post('/hockey', [HockeyController::class, 'store'])->name('hockey.store');

Route::get('/basketball', [BasketballController::class, 'index'])->name('basketball.index');
Route::post('/basketball', [BasketballController::class, 'store'])->name('basketball.store');

Route::get('/tennis', [TennisController::class, 'index'])->name('tennis.index');
Route::post('/tennis', [TennisController::class, 'store'])->name('tennis.store');

// routes/web.php

Route::get('barcode-blade', function () {
  
        $generatorHTML = new Picqer\Barcode\BarcodeGeneratorHTML();
        $barcode = $generatorHTML->getBarcode('0001245259636', $generatorHTML::TYPE_CODE_128);
  
        return view('sports_ticket', compact('barcode'));
 });

Route::get('/team-form', 'TeamDataController@showForm')->name('team.form');

Route::post('/football', [FootballDataController::class, 'index'])->name('football.form');
Route::post('/football', [FootballDataController::class, 'store'])->name('football.store');

Route::get('/form', function () {
    return view('form');
});

Route::get('/team-data', 'TeamDataController@index');

Route::get('/team_data/index', function () {
    return view('team_data/index');
});

Route::get('/add-games', function () {
    return view('add-games');
});


Route::get('/team-form', 'TeamDataController@showForm');

Route::post('/datasubmit',[SignupController::class,'datasub'])->name('datasubmit');


Route::post('/addgame',[games::class,'upload_game'])->name('addgame');


Route::get('/count-netball-data', 'NetballController@countAndShow');


Route::get('/posts/total', [NetballController::class, 'showTotalNetballRows']);


// Route::get('/team-data', 'TeamDataController@index');

// Route::post('/team-data', 'TeamDataController@store');

// Route::get('/team-form', 'TeamController@showForm');

// Route::post('/process-form', 'TeamController@processForm')->name('process.form');

// Route::get('/team-form', function () {
//     $teamNames = TeamData::pluck('name'); 

//     return view('football', compact('teamNames'));
// })->name('team-form');

Route::get('/count/netball', [CountController::class, 'countNetball']);
Route::get('/count/basketball', [CountController::class, 'countBasketball']);
Route::get('/count/hockey', [CountController::class, 'countHockey']);
Route::get('/count/tennis', [CountController::class, 'countTennis']);
Route::get('/count/football', [CountController::class, 'countFootball']);

Route::get('/count-rows', 'CountController@countRows');

Route::get('/basketball', function () {
    return view('basketball');
});

Route::get('/tickets', function () {
    return view('tickets');
});


// Route::get('/dashboard', [NetballController::class, 'dashboard'])
// ->middleware(['auth', 'verified'])
// ->name('dashboard');

Route::get('/dashboard', [NetballController::class, 'countTotalRows'])->middleware(['auth', 'verified'])->name('dashboard');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});




//Route::get('/r','football_games@stev');




//Route::get('query','stev@football_game');
Route::post('/datasubmit',[SignupController::class,'datasub'])->name('datasubmit');



Route::post('/addgame',[games::class,'upload_game'])->name('addgame');


Route::get('/add-games', [FootballGameController::class, 'addGamesView'])->name('add-games');



Route::get('/add', function () {
    return view('add-games');
});




require __DIR__.'/auth.php';


