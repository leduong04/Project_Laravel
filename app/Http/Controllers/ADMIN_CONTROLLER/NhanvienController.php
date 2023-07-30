<?php

namespace App\Http\Controllers\ADMIN_CONTROLLER;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class NhanvienController extends Controller
{
    public function show()
    {
        return view('./ADMIN/nhanvien');
    }
    public function show_add_nhanvien()
    {
        return view('./ADMIN/add_nhanvien');
    }
}
