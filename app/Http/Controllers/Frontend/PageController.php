<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Product;

class PageController extends Controller
{
    public function index()
    {
    	$products = Product::orderBy('id', 'DESC')->paginate();
    	return view('frontend.home', compact('products'));
    }

    public function product($id)
    {
    	$product = Product::find($id);
    	return view('frontend.product', compact('product'));
    }
}
