<?php

use App\Http\Controllers\PalindromeCheckController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/example-1', [PalindromeCheckController::class, 'index'])->name('palindrome.index');
Route::post('/example-1', [PalindromeCheckController::class, 'store'])->name('palindrome.store');

