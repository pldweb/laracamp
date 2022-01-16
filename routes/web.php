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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::view('/success-checkout', 'success-checkout');
Route::view('/checkout', 'checkout');




// Socialte routes
Route::get('sign-in-gogle',[UserController::class, 'google'])->name('login-with-google');
Route::get('auth/google/callback',[UserController::class, 'handleProviderCallback'])->name('handleCallback');


require __DIR__.'/auth.php';
