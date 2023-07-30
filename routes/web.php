<?php

use App\Http\Controllers\ADMIN_CONTROLLER\OrdersController;
use App\Http\Controllers\ADMIN_CONTROLLER\NhanvienController;
use App\Http\Controllers\ADMIN_CONTROLLER\ProductController;

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Route::get('/admin/orders', [OrdersController::class, 'show']);

Route::get('/admin/nhanvien', [NhanvienController::class, 'show']);

Route::get('/admin/product', [ProductController::class, 'show']);

Route::get('/admin/add_nhanvien', [NhanvienController::class, 'show_add_nhanvien']);
