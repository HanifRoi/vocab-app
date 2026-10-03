<?php

use App\Http\Controllers\JapanController;
use Illuminate\Database\Eloquent\Attributes\RouteKey;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::controller(JapanController::class)->group(function(){
    Route::get('/japan', 'index');
    Route::get('/japan/create', 'create');
    Route::post('/japan', 'store');
});
