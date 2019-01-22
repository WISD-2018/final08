<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;
use App\Product;
use Auth;
class OrdersController extends Controller
{
    public	function index()
    {$user = Auth::user();

        $orders	=Order::where('users_id',$user->id)->orderBy('total',	'DESC')->get();
        $data	=	['orders'	=> $orders];
        return	view('member.order.AllOrder',	$data);
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
