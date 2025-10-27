<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\CollaborationController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\CarrierController;

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

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [AboutController::class, 'index'])->name('about');
Route::get('/product', [ProductController::class, 'index'])->name('product');
Route::get('/event', [EventController::class, 'index'])->name('event');
Route::get('/shop', [ShopController::class, 'index'])->name('shop');
Route::get('/collaboration', [CollaborationController::class, 'index'])->name('collaboration');
Route::get('/carrier', [CarrierController::class, 'index'])->name('carrier');
Route::get('/carrier/{id}', [CarrierController::class, 'show'])->name('carrier.detail');
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::get('/faq', [FaqController::class, 'index'])->name('faq');

require __DIR__ . '/auth.php';
