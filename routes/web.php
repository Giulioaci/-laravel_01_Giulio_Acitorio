<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/Chi-Siamo', function (){
    return view('Chi-Siamo');
});

Route::get('/Contatti', function (){
    return view('Contatti');
});
