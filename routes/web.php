<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ChartController;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/chart-data', [ChartController::class, 'getChartData']);
Route::get('/bar', function () {
    return view('test');
});

Route::get('/pie', function () {
    return view('test_pie');
});

Route::get('/line', function () {
    return view('test_line');
});
