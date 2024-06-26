<?php

use App\Http\Controllers\BladeController;
use Illuminate\Support\Facades\Route;

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

Route::controller(BladeController::class)->group(function () {
    Route::get('', 'index');
    Route::get('second', 'secondPage');
});
