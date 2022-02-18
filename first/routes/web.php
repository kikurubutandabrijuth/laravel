<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

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
Route::get('/finance', function () {
    return view('paiement');
})->name('paiement');
Route::get('/new_etudiant', function () { 
    return view('new_etudiant');

})->name('new_etudiant');

Route::post('/store_etudiant', function (Request $request) {
    \DB::table('etudiants')->insert([
        'nom'=>$request->nom,
        'age'=>$request->age
    ]);
})->name('store_etudiant');
