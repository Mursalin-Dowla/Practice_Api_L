<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApiBladeController extends Controller
{
    function index(){
        return view('addProductApi');
    }
    function edit(){
        return view('editProductApi');
    }
}
