<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/', function () {
    $data = config("data.store"); 
    return view('home', $data);
});


Route::get('/home', function () {
    $data = config("data.store"); 
    return view('home', $data);
});

Route::get('/about', function () {
    
    return view('about');
});

Route::get('/home/{id}', function (string $id) {
    $allComics = config("data.store");
    $comics = $allComics["arrayFumetti"];
    $singleComic = $comics[$id];
    $comicData = [
        "comic" => $singleComic
    ];
    return view('comics-details', $comicData);
});
