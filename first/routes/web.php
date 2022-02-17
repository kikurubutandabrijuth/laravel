<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/toto', function () {
    return view('toto');
});
Route::get('/master', function () {
    return view('master');
});
Route::get('/etudiant', function () {
    $etudiants = ['toto','titi'];
    return view('etudiant', compact('etudiants'));
});
Route::get('/paiement', function () {
    return view('paiement
    ');
});

