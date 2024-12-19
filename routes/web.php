<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Dene\DeneController;

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

/*Route::get('/iletisim', function () {
    //echo "burası deneme iletişim sayfasıdır.";
    return view('iletisim');
});*/


/*Route::get('/hakkimizda', function () {
    //echo "burası deneme hakkımızda sayfasıdır.";
    return view('hakkimizda');
});*/

//Route::get('/iletisim', [DeneController::class, 'iletfonksiyon']);
//Route::get('/hakkimizda', [DeneController::class, 'hakFonksiyon']);

Route::controller(DeneController::class,)->group(function(){
    Route::get('/iletisim', 'iletfonksiyon')->name('ilet.yon');
    Route::get('/hakkimizda', 'hakFonksiyon')->name('hak.yon');
});


