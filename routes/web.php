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
    return view('welcome');
});

Route::get('/hakkimizda', function () {
    echo "Yapım Aşamasındadır...";
});

Route::get('/iletisim', function () {
    echo "3Teker ;)";

Route::get('/iletisim', function () {
        echo "default main branch silindi. master default yapıldı.";    
});
