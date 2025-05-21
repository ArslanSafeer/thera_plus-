<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OrderController;
Route::get('/', function () {
    return view('welcome');
});

Route::get('/orders-view', [OrderController::class, 'viewOrders']);
