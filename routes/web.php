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

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/services', [App\Http\Controllers\PagesController::class, 'servicePage'])->name('services');
Route::get('/about-us', [App\Http\Controllers\PagesController::class, 'aboutPage'])->name('about');
Route::get('/contact-us', [App\Http\Controllers\PagesController::class, 'contactPage'])->name('contact');
Route::get('/dashboard', [App\Http\Controllers\PagesController::class, 'dashboardPage'])->name('dashboard');


Route::post('/mailing-list', [App\Http\Controllers\MailingController::class, 'store'])->name('mailing.store');
