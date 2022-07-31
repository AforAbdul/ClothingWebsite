<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FbController;
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


// Route::get('/', 'App\Http\Controllers\RestoController@index' );
Route::get('/home', 'App\Http\Controllers\RestoController@home' );
Route::get('/unstitched', 'App\Http\Controllers\RestoController@unstitched' );
Route::get('/newarrival', 'App\Http\Controllers\RestoController@newarrival' );
Route::get('/contact', 'App\Http\Controllers\RestoController@contact' );
Route::get('/checkout', 'App\Http\Controllers\RestoController@checkout' );
Route::post('/checkout-submit', 'App\Http\Controllers\RestoController@submitCheckout' );
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('home');
    })->name('home');
});

Route::get('auth/facebook', [FbController::class, 'redirectToFacebook']);
Route::get('auth/facebook/callback', [FbController::class, 'facebookSignin']);
