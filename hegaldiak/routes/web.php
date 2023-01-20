<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HegaldiaController;
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
    return view('hegaldiak');
});

Route::get('/', [HegaldiaController::class, 'show_hegaldia']);

Route::get('/{id}', [HegaldiaController::class , 'aldatuhegaldia'])->name('hegaldiak-aldatu');
Route::patch('/{id}', [HegaldiaController::class , 'aldatuhegaldiadb'])->name('hegaldia-aldatu-db');