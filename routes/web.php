<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('template-base.home');
});

Route::get('/test', function () {
    return view('cricep.test');
});