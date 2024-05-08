<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/greeting/{name}', function ($name) {
    return view('greeting', ['name' => $name]);
});
Route::get('/home', function () {
    return view('home');
});
Route::get('/sobre', function () {
    return view('sobre');
});
Route::get('/contactos', function () {
    return view('contactos');
});
?>