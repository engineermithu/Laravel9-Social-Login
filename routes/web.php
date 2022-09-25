<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SocialController;
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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('login-facebook',[SocialController::class,'facebookRedirect'])->name('login.facebook');
Route::get('login-facebook-callback',[SocialController::class,'loginWithFacebook'])->name('login.facebook.callback');

Route::get('login-google',[SocialController::class,'googleRedirect'])->name('login.google');
Route::get('login-google-callback',[SocialController::class,'loginWithGoogle'])->name('login.google.callback');

Route::get('login-github',[SocialController::class,'githubRedirect'])->name('login.github');
Route::get('login-github-callback',[SocialController::class,'loginWithGithub'])->name('login.github.callback');
