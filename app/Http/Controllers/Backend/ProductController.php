<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Product;

class ProductController extends Controller
{
    /**
     * Show the application index products.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $paginate = true;
        $search = $request->get('name');
        if($search){
            $paginate = false;
            $products = Product::where('name', 'LIKE', "%$search%")->get();  
        }else{
            $products = Product::orderBy('id', 'DESC')->paginate();
        }
    	
        return view('backend.products.index', compact('products', 'paginate'));
    }
}
