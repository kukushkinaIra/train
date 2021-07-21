<?php

use App\Http\Controllers\FormController;
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

Route::get('/thanks', [FormController::class, 'thanks'])->name('thanks');

Route::get('/home', [FormController::class, 'home'])->name('home');

Route::post('/home/form', [FormController::class, 'submit'])->name('form');

