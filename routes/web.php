<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\FiturLandingController;
use App\Http\Controllers\FiturPosController;
use App\Http\Controllers\FiturSpController;
use App\Http\Controllers\PluginPosController;
use App\Http\Controllers\PluginSpController;
use App\Http\Controllers\PricingPosController;
use App\Http\Controllers\PricingSpController;
use App\Http\Controllers\FaqLandingController;
use App\Http\Controllers\FaqPosController;
use App\Http\Controllers\FaqSpController;

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
    return view('auth.login');
});

// Route::get('/register', [AuthController::class, 'register'])->name('register');
// Route::post('/register', [AuthController::class, 'registerPost'])->name('register');
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'loginPost'])->name('login');
Route::delete('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/pos/pricing/all', [PricingPosController::class, 'previewalldata'])->name('pospricing.previewalldata');
Route::get('/sp/pricing/all', [PricingSpController::class, 'previewalldata'])->name('sppricing.previewalldata');

Route::get('/home', [AuthController::class, 'setelahLogin'])->name('home');

//Landing Page - Fitur
Route::get('/fitur', [FiturLandingController::class, 'index'])->name('fitur');
Route::post('/store', [FiturLandingController::class, 'store'])->name('store');
Route::delete('/post/{id}', [FiturLandingController::class, 'destroy'])->name('destroy');
Route::get('/edit/{id}', [FiturLandingController::class, 'edit'])->name('edit');
Route::put('/update/{id}', [FiturLandingController::class, 'update'])->name('update');
Route::get('/preview/{id}', [FiturLandingController::class, 'preview'])->name('preview');

//Landing Page - Pricing
Route::get('/pricing', [PricingLandingController::class, 'index'])->name('pricing');
// Route::post('/store', [FiturLandingController::class, 'store'])->name('store');
// Route::delete('/posts/{id}', [FiturLandingController::class, 'destroy'])->name('destroy');
// Route::get('/edit/{id}', [FiturLandingController::class, 'edit'])->name('edit');
// Route::put('/update/{id}', [FiturLandingController::class, 'update'])->name('update');
// Route::get('/preview/{id}', [FiturLandingController::class, 'preview'])->name('preview');

//Landing Page - Faq
Route::get('/faq', [FaqLandingController::class, 'index'])->name('faq');
// Route::post('/store', [FiturLandingController::class, 'store'])->name('store');
// Route::delete('/posts/{id}', [FiturLandingController::class, 'destroy'])->name('destroy');
// Route::get('/edit/{id}', [FiturLandingController::class, 'edit'])->name('edit');
// Route::put('/update/{id}', [FiturLandingController::class, 'update'])->name('update');
// Route::get('/preview/{id}', [FiturLandingController::class, 'preview'])->name('preview');


//DIKO POS - Fitur
Route::get('/pos/fitur/list', [FiturPosController::class, 'index'])->name('posFitur');
// Route::post('/store', [FiturLandingController::class, 'store'])->name('store');
// Route::delete('/posts/{id}', [FiturLandingController::class, 'destroy'])->name('destroy');
// Route::get('/edit/{id}', [FiturLandingController::class, 'edit'])->name('edit');
// Route::put('/update/{id}', [FiturLandingController::class, 'update'])->name('update');
// Route::get('/preview/{id}', [FiturLandingController::class, 'preview'])->name('preview');

//DIKO POS - Pricing
Route::get('/pos/pricing/list', [PricingPosController::class, 'index'])->name('posPricing');
Route::post('/pos/store', [PricingPosController::class, 'store'])->name('pospricing.store');
Route::delete('/pos/posts/{id}', [PricingPosController::class, 'destroy'])->name('pospricing.destroy');
Route::get('/pos/edit/{id}', [PricingPosController::class, 'edit'])->name('pospricing.edit');
Route::put('/pos/update/{id}', [PricingPosController::class, 'update'])->name('pospricing.update');
Route::get('/pos/preview/{id}', [PricingPosController::class, 'preview'])->name('pospricing.preview');

//DIKO POS - Plugin
Route::get('/pos/plugin/list', [PluginPosController::class, 'index'])->name('posPlugin');
// Route::post('/store', [FiturLandingController::class, 'store'])->name('store');
// Route::delete('/posts/{id}', [FiturLandingController::class, 'destroy'])->name('destroy');
// Route::get('/edit/{id}', [FiturLandingController::class, 'edit'])->name('edit');
// Route::put('/update/{id}', [FiturLandingController::class, 'update'])->name('update');
// Route::get('/preview/{id}', [FiturLandingController::class, 'preview'])->name('preview');

//DIKO POS - Faq
Route::get('/pos/faq/list', [FaqPosController::class, 'index'])->name('posFaq');
// Route::post('/store', [FiturLandingController::class, 'store'])->name('store');
// Route::delete('/posts/{id}', [FiturLandingController::class, 'destroy'])->name('destroy');
// Route::get('/edit/{id}', [FiturLandingController::class, 'edit'])->name('edit');
// Route::put('/update/{id}', [FiturLandingController::class, 'update'])->name('update');
// Route::get('/preview/{id}', [FiturLandingController::class, 'preview'])->name('preview');


//DIKO SP - Fitur
Route::get('/sp/fitur/list', [FiturSpController::class, 'index'])->name('spFitur');
// Route::post('/store', [FiturLandingController::class, 'store'])->name('store');
// Route::delete('/posts/{id}', [FiturLandingController::class, 'destroy'])->name('destroy');
// Route::get('/edit/{id}', [FiturLandingController::class, 'edit'])->name('edit');
// Route::put('/update/{id}', [FiturLandingController::class, 'update'])->name('update');
// Route::get('/preview/{id}', [FiturLandingController::class, 'preview'])->name('preview');

//DIKO SP - Plugin
Route::get('/sp/plugin/list', [PluginSpController::class, 'index'])->name('spPlugin');
// Route::post('/store', [FiturLandingController::class, 'store'])->name('store');
// Route::delete('/posts/{id}', [FiturLandingController::class, 'destroy'])->name('destroy');
// Route::get('/edit/{id}', [FiturLandingController::class, 'edit'])->name('edit');
// Route::put('/update/{id}', [FiturLandingController::class, 'update'])->name('update');
// Route::get('/preview/{id}', [FiturLandingController::class, 'preview'])->name('preview');

//DIKO SP - Pricing
Route::get('/sp/pricing/list', [PricingSpController::class, 'index'])->name('spPricing');
Route::post('/sp/store', [PricingSpController::class, 'store'])->name('sppricing.store');
Route::delete('/sp/posts/{id}', [PricingSpController::class, 'destroy'])->name('sppricing.destroy');
Route::get('/sp/edit/{id}', [PricingSpController::class, 'edit'])->name('sppricing.edit');
Route::put('/sp/update/{id}', [PricingSpController::class, 'update'])->name('sppricing.update');
Route::get('/sp/preview/{id}', [PricingSpController::class, 'preview'])->name('sppricing.preview');

//DIKO SP - Faq
Route::get('/sp/faq/list', [FaqSpController::class, 'index'])->name('spFaq');
// Route::post('/store', [FiturLandingController::class, 'store'])->name('store');
// Route::delete('/posts/{id}', [FiturLandingController::class, 'destroy'])->name('destroy');
// Route::get('/edit/{id}', [FiturLandingController::class, 'edit'])->name('edit');
// Route::put('/update/{id}', [FiturLandingController::class, 'update'])->name('update');
// Route::get('/preview/{id}', [FiturLandingController::class, 'preview'])->name('preview');


