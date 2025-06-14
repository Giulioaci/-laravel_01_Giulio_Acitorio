<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('Homepage');

Route::get('/Chi-Siamo', function (){
    $users = [
        ['name'=> 'Marco', 'surname'=> 'Rossi', 'role'=> 'Senior Manager' ],
        ['name'=> 'Luca', 'surname'=> 'Verdi', 'role'=> 'HR' ],
        ['name'=> 'Guido', 'surname'=> 'Verdi', 'role'=> 'Developer' ]
    ];
    return view('Chi-Siamo',['users'=>$users]);
})->name('aboutus');

Route::get('/Chi-Siamo/detail/{name}', function ($name){
    $users = [
        ['name'=> 'Marco', 'surname'=> 'Rossi', 'role'=> 'Senior Manager' ],
        ['name'=> 'Luca', 'surname'=> 'Verdi', 'role'=> 'HR' ],
        ['name'=> 'Guido', 'surname'=> 'Verdi', 'role'=> 'Developer' ]
    ];
    foreach ($users as $user){
        if($name == $user['name']){
            return view('Chi-Siamo-detail',['user'=>$user]);
        }
    }
})->name('ChiSiamodetail');

Route::get('/Contatti', function (){
    return view('Contatti');
})->name('Contacts');

Route::get('/movies', function (){
     $movies = [
        ['id'=> '1', 'title'=> 'incontri ravvicinati del terzo tipo', 'director'=> 'S. spielberg', 'img'=> '/Media/ragazzi.jpg' ],
        ['id'=> '2', 'title'=> 'Quei bravi ragazzi', 'director'=> 'M. scorsese', 'img'=>'/Media/incontri.jpg' ],
    ];
    return view('movie.movies',['movies'=>$movies]);
})->name('movielist');
