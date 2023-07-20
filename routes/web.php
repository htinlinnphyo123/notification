<?php

use Carbon\Carbon;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SendNotification;

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
    dd(Carbon::now()->addMinute(1));
    return view('welcome');
});

Route::get('/send',[SendNotification::class,'sendNotification']);