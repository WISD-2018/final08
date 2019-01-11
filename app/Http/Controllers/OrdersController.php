<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;
use App\Product;
class OrdersController extends Controller
{
    public	function index()
    {
        $orders	=Order::orderBy('id',	'DESC')->get();
        $data	=	['orders'	=> $orders];
        return	view('AllOrder',	$data);
    }
    public function create()
    {
        return view('AddOrder');
    }

    public function destroy($id)
    {
        Product::destroy($id);
        return redirect()->route('product.show');
    }




    public function store(Request $request)
    {
        Order::create($request->all());
        return redirect()->route('order.show');
    }

}
