<?php

namespace App\Http\Controllers\ADMIN_CONTROLLER;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OrdersController extends Controller
{
    //
    public function show()
    {
        return view('./ADMIN/orders');
    }
}
