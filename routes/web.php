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
	$arrPrice = [
		"Bayi"=>["19.900", "14.900"], 
		"Pelajar"=>["46.900", "23.450"], 
		"Personal"=>["58.900", "38.900"], 
		"Bisnis"=>["109.900", "65.900"]
	];
    return view('layouts.template', compact('arrPrice'));
})->name('home');
