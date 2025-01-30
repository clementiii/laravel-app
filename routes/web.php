<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', function () {
    return view('hello');
});

route::get('/products', [ProductController::class, 'index']);

// you can use these to either link to views

// or to create pages that don't have a view
// example: 
//Route::get('/hello', function ()
// { return 'Hello World'; });
