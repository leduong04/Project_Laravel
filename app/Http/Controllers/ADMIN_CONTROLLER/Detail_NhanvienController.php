<?php

namespace App\Http\Controllers\ADMIN_CONTROLLER;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Detail_NhanvienController extends Controller
{
    public function show()
    {
        return view('./ADMIN/detail_nhanvien');
    }
}
