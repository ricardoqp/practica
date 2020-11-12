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

Route::get('/','controlador@login');

Route::post('/validar','controlador@validarlogin');

Route::get('/Home','controlador@home');

Route::get('/vangogh','controlador@vangogh');

Route::get('/dali','controlador@dali');

Route::get('/picasso','controlador@picasso');

Route::get('/davinci','controlador@davinci');

Route::get('/miguela','controlador@miguela');

