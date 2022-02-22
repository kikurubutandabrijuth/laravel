<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
Use App\Http\Controllers\Etudiantcontroller;

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
Route::get('/etudiant',[Etudiantcontroller::class ,'index']);
Route::get('/finance', function () {
    return view('paiement');
})->name('paiement');
Route::get('/new_etudiant', function () { 
    return view('new_etudiant');

})->name('new_etudiant');


Route::post('/store_etudiant',[Etudiantcontroller::class ,'store'])->name('store_etudiant');

Route::get('/edit_etudiant/{id}',[Etudiantcontroller::class ,'edit'])->name('edit');
Route::post('/update_etudiant',[Etudiantcontroller::class ,'update'])->name('update_etudiant');
