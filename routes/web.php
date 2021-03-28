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

Auth::routes();
// home
Route::get('/', [App\Http\Controllers\HomeController::class, 'main'])->name('home');
// account
Route::get('/account', [App\Http\Controllers\MyAccountController::class, 'index'])->name('account');
// my social media
Route::get('/my_social_media', [App\Http\Controllers\MySocialMediaController::class, 'index'])->name('my_social_media');
Route::get('/my_social_media/{social_media_name}', [App\Http\Controllers\MySocialMediaController::class, 'connect'])->name('my_social_media.connect');
