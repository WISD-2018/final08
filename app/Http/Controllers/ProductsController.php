<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \Carbon\Carbon as Carbon;
use App\Product;
use View;
use File;
use Auth;
use Redirect;
use App\Http\Requests;
use App\Http\Requests\ProductImageRequest;
class ProductsController extends Controller
{

    public	function all()
    {
        $products	=Product::orderBy('price',	'DESC')->get();
        $data	=	['products'	=> $products];
        return	view('AllProduct',$data);
    }

    public	function productIndex()
    { $user = Auth::user();
        $products	=Product::where('users_id',$user->id)->where('status','1')->orderBy('price',	'DESC')->get();
        $data	=	['products'	=> $products];
        return	view('member.product.AllProduct',	$data);
    }

    public function create()
    {
        return view('member.product.AddProduct');
    }

    public function store(ProductImageRequest $request)
    {
        if(!$request->hasFile('image')){
            return Redirect::route('product.show');
        }

        $file = $request->file('image');
        $destinationPath = 'uploads/book';

        $ext = $file -> getClientOriginalExtension();
        $fileName = (Carbon::now()->timestamp).'.'.$ext;

        $products['users_id']=$request->input('users_id');
        $products['name']=$request->input('name');
        $products['price']=$request->input('price');
        $products['class']=$request->input('class');
        $products['project']=$request->input('project');
        $products['word']=$request->input('word');
        $products['status']=$request->input('status');
        $products['image']=$destinationPath.'/'.$fileName;
        Product::create( $products);

        $file->move(public_path().'/'.$destinationPath, $fileName);




        return redirect()->route('product.show');


    }

    public function edit($id)
    {
        $products=Product::find($id);
        $data=['products'=>$products];
        return view('member.product.EditProduct', $data);
    }
    public function update(Request $request,$id)
    {  $file = $request->file('image');
        $destinationPath = 'uploads/book';

        $ext = $file -> getClientOriginalExtension();
        $fileName = (Carbon::now()->timestamp).'.'.$ext;

        $products['users_id']=$request->input('users_id');
        $products['name']=$request->input('name');
        $products['price']=$request->input('price');
        $products['class']=$request->input('class');
        $products['project']=$request->input('project');
        $products['status']=$request->input('status');
        $products['word']=$request->input('word');
        $products['image']=$destinationPath.'/'.$fileName;


        $product=Product::find($id);

        $product->update($products);

        $file->move(public_path().'/'.$destinationPath, $fileName);

        return redirect()->route('product.show');
    }
    public function destroy($id)
    {
        Product::destroy($id);
        return redirect()->route('product.show');
    }

    public function buy($id)
    {
        $products=Product::find($id);
        $products->status='0';
        $products->save();
        $data=['products'=>$products];
        return view('BuyProduct', $data);

    }


    public function search(Request $request)

    {
        /*
        if(!Request::has('keyword')){
            return Redirect::back();
        }
        $keyword = Request::get('keyword');


        $keyword =$request->input('name');
        $products = Product::where('name','LIKE',"%$keyword%");
        return View::make('AllProduct',['products'=>$products,'keyword'=>$keyword]);
         */
        $products	=Product::orderBy('price',	'DESC')->get();
        $data	=	['products'	=> $products];
        return	view('AllProduct',$data);
    }



    public	function class()
    {
        return	view('ProductClass');
    }

    public	function class2(Request $request)
    {
        /*
        $subject=$request->input('subject');
        $school=$request->input('school');

        $products	=Product::where('class','LIKE',"%$subject%" && 'project','LIKE',"%$school%");
        $data	=	['products'	=> $products];
        return	view('ProductClass2',$data);
        */
        $products	=Product::orderBy('price',	'DESC')->get();
        $data	=	['products'	=> $products];
        return	view('AllProduct',$data);
    }
}
