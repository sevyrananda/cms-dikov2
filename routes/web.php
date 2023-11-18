<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\FiturLandingController;
use App\Http\Controllers\FiturPosController;
use App\Http\Controllers\FiturPos2Controller;
use App\Http\Controllers\FiturSpController;
use App\Http\Controllers\FiturSp2Controller;
use App\Http\Controllers\PluginPosController;
use App\Http\Controllers\PluginSpController;
use App\Http\Controllers\PricingPosController;
use App\Http\Controllers\PricingSpController;
use App\Http\Controllers\FaqLandingController;
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
Route::get('/landing', [FiturLandingController::class, 'preview'])->name('landing.preview');
Route::get('/produk/pos/preview/{id}', [ProdukController::class, 'previewPos'])->name('produk.preview');

Route::group(['middleware' => 'auth'], function () {
    Route::delete('/logout', [AuthController::class, 'logout'])->name('logout');

    Route::get('/home', [HomeController::class, 'index'])->name('home');
    // Data User
    Route::get('/data_user', [DataUserController::class, 'index'])->name('dataUser');
    Route::post('/store_user', [DataUserController::class, 'store'])->name('store_user');
    Route::delete('/destroyUser/{id}', [DataUserController::class, 'destroy'])->name('destroyUser');
    Route::get('/editUser/{id}', [DataUserController::class, 'edit'])->name('editUser');
    Route::put('/updateUser/{id}', [DataUserController::class, 'update'])->name('updateUser');
    Route::get('/previewUser/{id}', [DataUserController::class, 'preview'])->name('previewUser');


    #produk
    Route::get('/produk', [ProdukController::class, 'index'])->name('produk');
    Route::post('/produk/store', [ProdukController::class, 'store'])->name('produk.store');
    Route::delete('/produk/destroy/{id}', [ProdukController::class, 'destroy'])->name('produk.destroy');
    Route::get('/produk/edit/{id}', [ProdukController::class, 'edit'])->name('produk.edit');
    Route::put('/produk/update/{id}', [ProdukController::class, 'update'])->name('produk.update');
    Route::get('/produk/preview/{id}/{selection}', [ProdukController::class, 'preview'])->name('produk.preview');


    //Landing Page - Fitur
    Route::get('/landing/fitur', [FiturLandingController::class, 'index'])->name('landing.fitur');
    Route::post('/landing/store', [FiturLandingController::class, 'store'])->name('landing.store');
    Route::delete('/landing/post/{id}', [FiturLandingController::class, 'destroy'])->name('landing.destroy');
    Route::get('/landing/edit/{id}', [FiturLandingController::class, 'edit'])->name('landing.edit');
    Route::put('/landing/update/{id}', [FiturLandingController::class, 'update'])->name('landing.update');
    Route::get('/landing/show/{id}', [FiturLandingController::class, 'show'])->name('landing.show');

    //Landing Page - Faq
    Route::get('/faq', [FaqLandingController::class, 'index'])->name('faq');
    Route::post('/store', [FaqLandingController::class, 'store'])->name('store');
    Route::delete('/posts/{id}', [FaqLandingController::class, 'destroy'])->name('destroy');
    Route::get('/edit/{id}', [FaqLandingController::class, 'edit'])->name('edit');
    Route::put('/update/{id}', [FaqLandingController::class, 'update'])->name('update');
    Route::get('/preview/{id}', [FaqLandingController::class, 'preview'])->name('faq.preview');
    Route::get('/previewall', [FaqLandingController::class, 'previewall'])->name('previewall');


    //DIKO POS - fitur
    //section 1
    Route::get('/pos/fitur/list', [FiturPosController::class, 'index'])->name('pos.fitur');
    Route::post('/pos/fitur/store', [FiturPosController::class, 'store'])->name('pos.fitur.store');
    Route::delete('/pos/fitur/{id}', [FiturPosController::class, 'destroy'])->name('pos.fitur.destroy');
    Route::get('/pos/fitur/edit/{id}', [FiturPosController::class, 'edit'])->name('pos.fitur.edit');
    Route::put('/pos/fitur/update/{id}', [FiturPosController::class, 'update'])->name('pos.fitur.update');
    Route::get('/pos/fitur/preview/', [FiturPosController::class, 'preview'])->name('pos.fitur.preview');
    //section 2
    Route::get('/pos/fitur2/list', [FiturPos2Controller::class, 'index'])->name('pos.fitur2');
    Route::post('/pos/fitur2/store', [FiturPos2Controller::class, 'store'])->name('pos.fitur2.store');
    Route::delete('/pos/fitur2/{id}', [FiturPos2Controller::class, 'destroy'])->name('pos.fitur2.destroy');
    Route::get('/pos/fitur2/edit/{id}', [FiturPos2Controller::class, 'edit'])->name('pos.fitur2.edit');
    Route::put('/pos/fitur2/update/{id}', [FiturPos2Controller::class, 'update'])->name('pos.fitur2.update');
    Route::get('/pos/fitur2/preview/', [FiturPos2Controller::class, 'preview'])->name('pos.fitur2.preview');

    //DIKO POS - Pricing
    Route::get('/pos/pricing/list', [PricingPosController::class, 'index'])->name('pospricing');
    Route::post('/pos/store', [PricingPosController::class, 'store'])->name('pospricing.store');
    Route::delete('/pos/posts/{id}', [PricingPosController::class, 'destroy'])->name('pospricing.destroy');
    Route::get('/pos/edit/{id}', [PricingPosController::class, 'edit'])->name('pospricing.edit');
    Route::put('/pos/update/{id}', [PricingPosController::class, 'update'])->name('pospricing.update');
    Route::get('/pos/preview/{id}', [PricingPosController::class, 'preview'])->name('pospricing.preview');
    Route::get('/pos/pricing/all', [PricingPosController::class, 'previewalldata'])->name('pospricing.previewalldata');

    //DIKO POS - Plugin
    Route::get('/pos/plugin/list', [PluginPosController::class, 'index'])->name('posPlugin');
    Route::post('/store_pluginpos', [PluginPosController::class, 'store'])->name('store_pluginpos');
    Route::delete('/destroyPos/{id}', [PluginPosController::class, 'destroy'])->name('destroyPos');
    Route::get('/editPos/{id}', [PluginPosController::class, 'edit'])->name('editPos');
    Route::put('/updatePos/{id}', [PluginPosController::class, 'update'])->name('updatePos');
    Route::get('/previewPos/{id}', [PluginPosController::class, 'preview'])->name('previewPos');
    Route::get('/pos/plugin/all', [PluginPosController::class, 'previewalldata'])->name('posplugin.previewalldata');


    //DIKO SP - Fitur
    //section 1
    Route::get('/sp/fitur/list', [FiturSpController::class, 'index'])->name('sp.fitur');
    Route::post('/sp/fitur/store', [FiturSpController::class, 'store'])->name('sp.fitur.store');
    Route::delete('/sp/fitur/{id}', [FiturSpController::class, 'destroy'])->name('sp.fitur.destroy');
    Route::get('/sp/fitur/edit/{id}', [FiturSpController::class, 'edit'])->name('sp.fitur.edit');
    Route::put('/sp/fitur/update/{id}', [FiturSpController::class, 'update'])->name('sp.fitur.update');
    Route::get('/sp/fitur/preview/', [FiturSpController::class, 'preview'])->name('sp.fitur.preview');
    //section 2
    Route::get('/sp/fitur2/list', [FiturSp2Controller::class, 'index'])->name('sp.fitur2');
    Route::post('/sp/fitur2/store', [FiturSp2Controller::class, 'store'])->name('sp.fitur2.store');
    Route::delete('/sp/fitur2/{id}', [FiturSp2Controller::class, 'destroy'])->name('sp.fitur2.destroy');
    Route::get('/sp/fitur2/edit/{id}', [FiturSp2Controller::class, 'edit'])->name('sp.fitur2.edit');
    Route::put('/sp/fitur2/update/{id}', [FiturSp2Controller::class, 'update'])->name('sp.fitur2.update');
    Route::get('/sp/fitur2/preview/', [FiturSp2Controller::class, 'preview'])->name('sp.fitur2.preview');

    //DIKO SP - Plugin
    Route::get('/sp/plugin/list', [PluginSpController::class, 'index'])->name('spPlugin');
    Route::post('/store_pluginsp', [PluginSpController::class, 'store'])->name('store_pluginsp');
    Route::delete('/destroySp/{id}', [PluginSpController::class, 'destroy'])->name('destroySp');
    Route::get('/editSp/{id}', [PluginSpController::class, 'edit'])->name('editSp');
    Route::put('/updateSp/{id}', [PluginSpController::class, 'update'])->name('updateSp');
    Route::get('/previewSp/{id}', [PluginSpController::class, 'preview'])->name('previewSp');
    Route::get('/sp/plugin/all', [PluginSpController::class, 'previewalldata'])->name('spplugin.previewalldata');

    //DIKO SP - Pricing
    Route::get('/sp/pricing/list', [PricingSpController::class, 'index'])->name('sppricing');
    Route::post('/sp/pricing/store', [PricingSpController::class, 'store'])->name('sppricing.store');
    Route::delete('/sp//pricing/posts/{id}', [PricingSpController::class, 'destroy'])->name('sppricing.destroy');
    Route::get('/sp/edit/{id}', [PricingSpController::class, 'edit'])->name('sppricing.edit');
    Route::put('/sp/update/{id}', [PricingSpController::class, 'update'])->name('sppricing.update');
    Route::get('/sp/preview/{id}', [PricingSpController::class, 'preview'])->name('sppricing.preview');
    Route::get('/sp/pricing/all', [PricingSpController::class, 'previewalldata'])->name('sppricing.previewalldata');

    //DIKO SP - Faq
    Route::get('/sp/faq/list', [FaqSpController::class, 'index'])->name('sp.faq');
    Route::post('/sp/faq/store', [FaqSpController::class, 'store'])->name('sp.store');
    Route::delete('/sp/posts/{id}', [FaqSpController::class, 'destroy'])->name('sp.destroy');
    Route::get('/sp/edit/{id}', [FaqSpController::class, 'edit'])->name('sp.edit');
    Route::put('/sp/faq/update/{id}', [FaqSpController::class, 'update'])->name('sp.update');
    Route::get('/sp/faq/preview/{id}', [FaqSpController::class, 'preview'])->name('sp.preview');
    Route::get('/sp/previewall', [FaqSpController::class, 'previewall'])->name('sp.previewall');
});
