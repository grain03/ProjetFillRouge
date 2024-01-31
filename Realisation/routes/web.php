<?php

use App\Http\Controllers\InscriptionController;
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
    return view('home');
})->name('home');


Route::get('/inscription', [InscriptionController::class, 'index'])->name('inscription');
Route::post('/store', [InscriptionController::class, 'create'])->name('store');

Route::get('/test', function () {
    return view('inscription.test');
})->name('test');