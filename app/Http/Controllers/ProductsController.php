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
        $products	=Product::where('users_id',$user->id)->orderBy('price',	'DESC')->get();
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
        $data=['products'=>$products];
        Product::destroy($id);
        return view('BuyProduct', $data);

    }

    public function search()
    {
        if(!Request::has('keyword')){
            return Redirect::back();
        }
        $keyword = Request::get('keyword');

        $products = Product::where('name','LIKE',"%$keyword%");
        return View::make('SearchProduct',['products'=>$products,'keyword'=>$keyword]);
    }

    public	function class()
    {
        return	view('ProductClass');
    }

    public	function class2()
    {
        $subject="";
        $school="";
        $subject->input('subject');
        $school->input('school');
        $products	=Product::where('class'==$subject && 'project'==$school);
        $data	=	['products'	=> $products];
        return	view('ProductClass2',$data);
    }


}
