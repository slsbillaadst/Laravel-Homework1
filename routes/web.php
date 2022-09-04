<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UkmController;

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
    return view('ukms.home', 
    [
        "title"=>"HOME"
    ]
    );
});

Route::get('/about', [UkmController::class, 'about']);

Route::get('/register', [UkmController::class, 'register']);
Route::post('/detail', [UkmController::class, 'detail']);