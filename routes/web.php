<?php

use Illuminate\Support\Facades\Route;
use App\Models\Donate;
use App\Models\Volunteer;
use  App\Http\Controllers\DonateController;
use  App\Http\Controllers\VoulnteerController;
use App\Http\Controllers\AuthController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {

    return view('index');
});

// Route::get('/donate',function(){
        
//     // $donate = Donate::all();
//     //  echo "<pre>";
//     //  print_r($donate->toArray());
//     return view('donate');
// });
// Route::get('/index', function () {
//     return view('index');
// });
Route::get('/event', function () {
    return view('event');
});
// Route::get('/volunteer', function () {
//     return view('volunteer');
// });
Route::get('/causes', function () {
    return view('causes');
});
Route::get('/about', function () {
    return view('about');
});

Route::get('/donate',[DonateController::class,'index']);
Route::get('/donate/view',[DonateController::class,'view']);
Route::post('/donate',[DonateController::class,'store']);

Route::get('/volunteer',[VoulnteerController::class,'index']);
Route::post('/volunteer',[VoulnteerController::class,'store']);

// Route::post('/volunteer', function () {
//     echo "volunteer post";
// });
// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/login',[AuthController::class , 'login']);
Route::get('/register',[AuthController::class,'register']);
Route::post('/register',[AuthController::class,'registerAdmin']);
Route::post('/login',[AuthController::class,'loginAdmin']);
Route::get('/logout',[AuthController::class , 'logout']);
