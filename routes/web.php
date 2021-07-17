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
})->name('Home');

Route::get('/Offers', function () {
    return view('Offers');
})->name('Offers');

Route::get('/AboutUs', function () {
    return view('AboutUs');
})->name('AboutUs');

Route::get('/ContactUs', function () {
    return view('ContactUs');
})->name('ContactUs');

Route::get('/results', function () {
    return view('results');
})->name('results');

Route::get('/profil', function () {
    return view('auth\profil');
})->name('profil');

/*
Route::get('/test', function () {
    return view('layouts\master');
})->name('testpage');*/

Route::get('/test', function () {
    return view('inputbox');
})->name('test');




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::post('/editProfilImg/{id}', 'UpdateProfil@updateProfilImg')->name('editProfilImg');

Route::post('/editfirstname/{id}', 'UpdateProfil@editfirstname')->name('editfirstname');

Route::post('/editlastname/{id}', 'UpdateProfil@editlastname')->name('editlastname');

Route::post('/edittel/{id}', 'UpdateProfil@edittel')->name('edittel');

Route::post('/editnationalite/{id}', 'UpdateProfil@editnationalite')->name('editnationalite');

Route::post('/editemail/{id}', 'UpdateProfil@editemail')->name('editemail');

Route::get('/inputdata', 'MakeData@index');

