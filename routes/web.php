<?php

use App\Http\Controllers\ADMIN_CONTROLLER\OrdersController;
use App\Http\Controllers\ADMIN_CONTROLLER\NhanvienController;
use App\Http\Controllers\ADMIN_CONTROLLER\ProductController;
use App\Http\Controllers\ADMIN_CONTROLLER\Image_nhanvien_Controller;


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

Route::get('/admin/nhanvien', [NhanvienController::class, 'show'])->name('nhanvien.nhanvien_list');

Route::get('/admin/product', [ProductController::class, 'show']);

Route::get('/admin/add_nhanvien', [NhanvienController::class, 'show_add_nhanvien'])->name('nhanvien.add_nhanvien');

Route::post('/admin/xuli_add_nhavien', [NhanvienController::class, 'xuli_add_nhanvien'])->name('nhanvien.xuli_add_nhanvien');

// Sửa thông tin nhân viên
Route::post('/admin/nhanvien/update/{id}',  [NhanvienController::class, 'update'])->name('nhanvien.update');




// Hiển thị form sửa thông tin nhân viên
Route::get('/admin/nhanvien/show_update/{id}', [NhanvienController::class, 'show_update'])->name('nhanvien.show_update');




Route::delete('/admin/nhanvien/delete/{id}', [NhanvienController::class, 'delete'])->name('nhanvien.delete');
