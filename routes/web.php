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

Route::get('/.well-known/acme-challenge/0ZjWdTCIedojHOLdL2dnF1oz_cJKdcT42wZlHPQd52Y', function() {
    return "0ZjWdTCIedojHOLdL2dnF1oz_cJKdcT42wZlHPQd52Y.cqKzfmzI1Nc6LTejVr4r9dOTNZ5hpFoZv0rbkzl90qA";
});
