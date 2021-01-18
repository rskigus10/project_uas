<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\SettingController;
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

route::get('', [HomeController::class, 'showHome']);
route::get('client', [HomeController::class, 'showHome']);
route::get('template/{status}', [HomeController::class, 'showTemplate']);
route::get('kategori', [HomeController::class, 'showKategori']);

route::get('setting', [SettingController::class, 'index']);
route::post('setting', [SettingController::class, 'store']);

route::prefix('admin')->middleware('auth')->group(function(){
    route::post('produk/filter', [ProdukController::class, 'filter']);
    route::get('template', [HomeController::class, 'showTemplate']);
    route::resource('produk', ProdukController::class);
    route::resource('user', UserController::class);
});
route::prefix('client')->middleware('auth')->group(function(){
    route::post('produk/filter', [HomeController::class, 'filter']);
});



route::get('login', [AuthController::class, 'showLogin'])->name('login');

route::post('login', [AuthController::class, 'loginProcess']);
route::get('logout', [AuthController::class, 'Logout']);


route::get('register', [AuthController::class, 'showRegister']);
route::post('register', [AuthController::class, 'registerProcess']);

route::get('test-collection', [HomeController::class, 'testCollection']);
route::get('test-ajax', [HomeController::class, 'testAjax']);
