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
    return view('site.home');

}) ->name('site.home');

Route::get('/produtos', function () {
    return view('site.produtos');
}) ->name('site.products');


Route::get('/contatos', function () {
    return view('site.contatos');
}) ->name('site.contact');

