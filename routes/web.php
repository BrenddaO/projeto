<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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

Route::controller(UserController::class)->prefix('user')->name('user.')->group(function () {
    Route::get('/', 'index')->name('index');
    Route::post('/', 'create')->name('create');
    Route::get('/{id}', 'show')->name('show');
    Route::patch('/{id}', 'edit')->name('edit');
    Route::delete('/{id}', 'destroy')->name('destroy');
 });
