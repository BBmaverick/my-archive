<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\aggregatecontroller;


Route::get('/', function () {
    return view('welcome');
});
Route::resource("/client", ClientController::class);
Route::get('agg',[aggregatecontroller::class,'getuser']);
