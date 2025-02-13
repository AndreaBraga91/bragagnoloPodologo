<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/patologie', function () {
    return view('patologie.index');
});

Route::get('/chi-sono', function () {
    return view('chiSono');
});

Route::get('/lo-studio', function () {
    return view('loStudio');
});

Route::get('/contatti', function () {
    return view('contatti');
});
