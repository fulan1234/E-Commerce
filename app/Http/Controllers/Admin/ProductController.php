<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function Index()
    {
        return view('admin.allproduct');
    }
    public function Addproduct()
    {
        return view('admin.addproduct');
    }
}
