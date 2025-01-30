<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', function () {
    return view('hello');
});

// you can use these to either link to views

// or to create pages that don't have a view
// example: 
//Route::get('/hello', function ()
// { return 'Hello World'; });
