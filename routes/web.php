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
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DataUserController;

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

Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/register', [AuthController::class, 'registerPost'])->name('register');
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'loginPost'])->name('login');
Route::delete('/logout', [AuthController::class, 'logout'])->name('logout');
Route::get('/landing/preview/', [FiturLandingController::class, 'preview'])->name('landing.preview');

Route::get('/pos/plugin/all', [PluginPosController::class, 'previewalldata'])->name('posplugin.previewalldata');
Route::get('/sp/plugin/all', [PluginSpController::class, 'previewalldata'])->name('spplugin.previewalldata');


Route::middleware(['auth'])->group(function () {
    // Rute yang memerlukan otentikasi
    
    // Main
    Route::get('/home', [AuthController::class, 'setelahLogin'])->name('home');
    Route::get('/data_user', [DataUserController::class, 'index'])->name('dataUser');

    //Landing Page
    Route::get('/fitur', [FiturLandingController::class, 'index'])->name('fitur');
    Route::get('/pricing', [PricingLandingController::class, 'index'])->name('pricing');
    Route::get('/faq', [FaqLandingController::class, 'index'])->name('faq');
    
    // DIKO POS
    Route::get('/pos/fitur/list', [FiturPosController::class, 'index'])->name('posFitur');
    Route::get('/pos/pricing/list', [PricingPosController::class, 'index'])->name('posPricing');
    Route::get('/pos/plugin/list', [PluginPosController::class, 'index'])->name('posPlugin');
    Route::get('/pos/faq/list', [FaqPosController::class, 'index'])->name('posFaq');

    // DIKO SP
    Route::get('/sp/fitur/list', [FiturSpController::class, 'index'])->name('spFitur');
    Route::get('/sp/plugin/list', [PluginSpController::class, 'showPosts'])->name('spPlugin');
    Route::get('/sp/pricing/list', [PricingSpController::class, 'index'])->name('spPricing');
    Route::get('/sp/faq/list', [FaqSpController::class, 'index'])->name('spFaq');

});

// Route::get('/home', [AuthController::class, 'setelahLogin'])->name('home')->middleware('auth');

// Data User
// Route::get('/data_user', [DataUserController::class, 'index'])->name('dataUser')->middleware('auth');
Route::post('/store_user', [DataUserController::class, 'store'])->name('store_user');
Route::delete('/destroyUser/{id}', [DataUserController::class, 'destroy'])->name('destroyUser');
Route::get('/editUser/{id}', [DataUserController::class, 'edit'])->name('editUser');
Route::put('/updateUser/{id}', [DataUserController::class, 'update'])->name('updateUser');
Route::get('/previewUser/{id}', [DataUserController::class, 'preview'])->name('previewUser');

//Landing Page - Fitur
// Route::get('/fitur', [FiturLandingController::class, 'index'])->name('fitur');
Route::post('/store', [FiturLandingController::class, 'store'])->name('store');
Route::delete('/posts/{id}', [FiturLandingController::class, 'destroy'])->name('destroy');
Route::get('/edit/{id}', [FiturLandingController::class, 'edit'])->name('edit');
Route::put('/update/{id}', [FiturLandingController::class, 'update'])->name('update');
Route::get('/preview/{id}', [FiturLandingController::class, 'preview'])->name('preview');

//Landing Page - Pricing
// Route::get('/pricing', [PricingLandingController::class, 'index'])->name('pricing');
// Route::post('/store', [FiturLandingController::class, 'store'])->name('store');
// Route::delete('/posts/{id}', [FiturLandingController::class, 'destroy'])->name('destroy');
// Route::get('/edit/{id}', [FiturLandingController::class, 'edit'])->name('edit');
// Route::put('/update/{id}', [FiturLandingController::class, 'update'])->name('update');
// Route::get('/preview/{id}', [FiturLandingController::class, 'preview'])->name('preview');

//Landing Page - Faq
// Route::get('/faq', [FaqLandingController::class, 'index'])->name('faq');
// Route::post('/store', [FiturLandingController::class, 'store'])->name('store');
// Route::delete('/posts/{id}', [FiturLandingController::class, 'destroy'])->name('destroy');
// Route::get('/edit/{id}', [FiturLandingController::class, 'edit'])->name('edit');
// Route::put('/update/{id}', [FiturLandingController::class, 'update'])->name('update');
// Route::get('/preview/{id}', [FiturLandingController::class, 'preview'])->name('preview');


//DIKO POS - Fitur
// Route::get('/pos/fitur/list', [FiturPosController::class, 'index'])->name('posFitur');
// Route::post('/store', [FiturLandingController::class, 'store'])->name('store');
// Route::delete('/posts/{id}', [FiturLandingController::class, 'destroy'])->name('destroy');
// Route::get('/edit/{id}', [FiturLandingController::class, 'edit'])->name('edit');
// Route::put('/update/{id}', [FiturLandingController::class, 'update'])->name('update');
// Route::get('/preview/{id}', [FiturLandingController::class, 'preview'])->name('preview');

//DIKO POS - Pricing
// Route::get('/pos/pricing/list', [PricingPosController::class, 'index'])->name('posPricing');
// Route::post('/store', [FiturLandingController::class, 'store'])->name('store');
// Route::delete('/posts/{id}', [FiturLandingController::class, 'destroy'])->name('destroy');
// Route::get('/edit/{id}', [FiturLandingController::class, 'edit'])->name('edit');
// Route::put('/update/{id}', [FiturLandingController::class, 'update'])->name('update');
// Route::get('/preview/{id}', [FiturLandingController::class, 'preview'])->name('preview');

//DIKO POS - Plugin
// Route::get('/pos/plugin/list', [PluginPosController::class, 'index'])->name('posPlugin');
Route::post('/store_pluginpos', [PluginPosController::class, 'store'])->name('store_pluginpos');
Route::delete('/destroyPos/{id}', [PluginPosController::class, 'destroy'])->name('destroyPos');
Route::get('/editPos/{id}', [PluginPosController::class, 'edit'])->name('editPos');
Route::put('/updatePos/{id}', [PluginPosController::class, 'update'])->name('updatePos');
Route::get('/previewPos/{id}', [PluginPosController::class, 'preview'])->name('previewPos');

//DIKO POS - Faq
// Route::get('/pos/faq/list', [FaqPosController::class, 'index'])->name('posFaq');
// Route::post('/store', [FiturLandingController::class, 'store'])->name('store');
// Route::delete('/posts/{id}', [FiturLandingController::class, 'destroy'])->name('destroy');
// Route::get('/edit/{id}', [FiturLandingController::class, 'edit'])->name('edit');
// Route::put('/update/{id}', [FiturLandingController::class, 'update'])->name('update');
// Route::get('/preview/{id}', [FiturLandingController::class, 'preview'])->name('preview');


//DIKO SP - Fitur
// Route::get('/sp/fitur/list', [FiturSpController::class, 'index'])->name('spFitur');
// Route::post('/store', [FiturLandingController::class, 'store'])->name('store');
// Route::delete('/posts/{id}', [FiturLandingController::class, 'destroy'])->name('destroy');
// Route::get('/edit/{id}', [FiturLandingController::class, 'edit'])->name('edit');
// Route::put('/update/{id}', [FiturLandingController::class, 'update'])->name('update');
// Route::get('/preview/{id}', [FiturLandingController::class, 'preview'])->name('preview');

//DIKO SP - Plugin
// Route::get('/sp/plugin/list', [PluginSpController::class, 'showPosts'])->name('spPlugin');
Route::post('/store_pluginsp', [PluginSpController::class, 'store'])->name('store_pluginsp');
Route::delete('/destroySp/{id}', [PluginSpController::class, 'destroy'])->name('destroySp');
Route::get('/editSp/{id}', [PluginSpController::class, 'edit'])->name('editSp');
Route::put('/updateSp/{id}', [PluginSpController::class, 'update'])->name('updateSp');
Route::get('/previewSp/{id}', [PluginSpController::class, 'preview'])->name('previewSp');

//DIKO SP - Pricing
// Route::get('/sp/pricing/list', [PricingSpController::class, 'index'])->name('spPricing');
// Route::post('/store', [FiturLandingController::class, 'store'])->name('store');
// Route::delete('/posts/{id}', [FiturLandingController::class, 'destroy'])->name('destroy');
// Route::get('/edit/{id}', [FiturLandingController::class, 'edit'])->name('edit');
// Route::put('/update/{id}', [FiturLandingController::class, 'update'])->name('update');
// Route::get('/preview/{id}', [FiturLandingController::class, 'preview'])->name('preview');

//DIKO SP - Faq
// Route::get('/sp/faq/list', [FaqSpController::class, 'index'])->name('spFaq');
// Route::post('/store', [FiturLandingController::class, 'store'])->name('store');
// Route::delete('/posts/{id}', [FiturLandingController::class, 'destroy'])->name('destroy');
// Route::get('/edit/{id}', [FiturLandingController::class, 'edit'])->name('edit');
// Route::put('/update/{id}', [FiturLandingController::class, 'update'])->name('update');
// Route::get('/preview/{id}', [FiturLandingController::class, 'preview'])->name('preview');


