<?php

use App\Http\Controllers\FruitController;
use App\Models\Fruit;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/bootstrap', function () {
    $fruits = Fruit::all();
    return view('bootstrap', compact('fruits'));
});

Route::get('/login', function () {
    return 'anda harus login dahulu';
})->name('login');

Route::resource('/fruit', FruitController::class)->middleware('auth');
