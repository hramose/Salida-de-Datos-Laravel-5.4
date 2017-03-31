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
            \Cache::put('data', $products, 90);
        }else{
            $products = Product::orderBy('id', 'DESC')->paginate();
        }
    	
        return view('backend.products.index', compact('products', 'paginate'));
    }

    public function pdf()
    {
        $products = \Cache::get('data');
        $pdf = \PDF::loadView('backend.products.pdf', compact('products'));
        return $pdf->download('listado.pdf');
    }

    public function xls()
    {
        \Excel::create('listado', function($excel) {
            $excel->sheet('Sheetname', function($sheet) {
                $sheet->setOrientation('landscape');
                $sheet->fromArray(\Cache::get('data'));
            });
        })->download('xls');
    }
}
