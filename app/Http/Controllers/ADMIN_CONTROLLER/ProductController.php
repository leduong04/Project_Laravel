<?php

namespace App\Http\Controllers\Admin_Controller;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Product;
use App\Models\Image;

class ProductController extends Controller
{
    public function show()
    {
        $products = Product::with('image')->get();

        return view('/ADMIN/product', compact('products'));
    }
}

