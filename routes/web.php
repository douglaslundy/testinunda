<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientController;

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

Route::get('/', [ClientController::class, 'index']);

// add new Client
Route::get('/new', [ClientController::class, 'newClient']);
Route::post('/new', [ClientController::class, 'saveClient']);

// update new Client
Route::get('/edit/{id}', [ClientController::class, 'editClient']);
Route::post('/update/{id}', [ClientController::class, 'updateClient']);

// delete Client
Route::get('/delete/{id}', [ClientController::class, 'deletClient']);

// some routes
Route::get('/contact', function(){
    return view('contact');
});

Route::get('/about', function(){
    return view('about');
});
