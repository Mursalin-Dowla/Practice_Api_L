<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    function index(){
        $products = Products::all();
        return view('product',compact('products'));
    }
}
