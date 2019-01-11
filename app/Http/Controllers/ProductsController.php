<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductsController extends Controller
{



    public	function productIndex()
    {
        $products	=Product::orderBy('price',	'DESC')->get();
        $data	=	['products'	=> $products];
        return	view('AllProduct',	$data);
    }

    public function create()
    {
        return view('AddProduct');
    }
    public function store(Request $request)
    {
        Product::create($request->all());
        return redirect()->route('product.show');
    }
    public function edit($id)
    {
        $products=Product::find($id);
        $data=['products'=>$products];
        return view('EditProduct', $data);
    }
    public function update(Request $request,$id)
    {
        $products=Product::find($id);
        $products->update($request->all());
        return redirect()->route('product.show');
    }
    public function destroy($id)
    {
        Product::destroy($id);
        return redirect()->route('product.show');
    }


}
