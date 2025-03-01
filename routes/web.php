<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\JSONController;

Route::get('/', function () {
    return view('welcome');
});
Route::get("read-json",[JSONController::class,"index"]);
