<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        return view('products.index');
    }

    public function category($category)
    {
        return view('products.index', compact('category'));
    }

    public function show($id)
    {
        return view('products.show', compact('id'));
    }

    public function sale()
    {
        return view('products.index', ['category' => 'sale']);
    }
}

