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

Route::get('/features', [App\Http\Controllers\PagesController::class, 'featuresPage'])->name('features');
Route::get('/about-us', [App\Http\Controllers\PagesController::class, 'aboutPage'])->name('about');
Route::get('/contact-us', [App\Http\Controllers\PagesController::class, 'contactPage'])->name('contact');
Route::get('/dashboard', [App\Http\Controllers\PagesController::class, 'dashboardPage'])->name('dashboard');
Route::get('/vehicle-vitals', [App\Http\Controllers\PagesController::class, 'vehicleVitals'])->name('vitals');
Route::get('/settings', [App\Http\Controllers\PagesController::class, 'settings'])->name('settings');
Route::get('/mileage', [App\Http\Controllers\PagesController::class, 'mileage'])->name('mileage');
Route::get('/config', [App\Http\Controllers\PagesController::class, 'config'])->name('config');
Route::get('/overview', [App\Http\Controllers\PagesController::class, 'overview'])->name('overview');


//contact Pages
Route::get('/contact-us', [App\Http\Controllers\ContactController::class, 'show'])->name('contact');
Route::post('/contacts', [App\Http\Controllers\ContactController::class, 'store'])->name('contact.store');


//mailing Pages
Route::post('/mailing-list', [App\Http\Controllers\MailingController::class, 'store'])->name('mailing.store');
