<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\products;
use Validator;
use Image;
use Session;
class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('product.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('product/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(),
            [
                'product_name'=>'required|max:20|min:3',
                'product_image' => 'required|mimes:jpeg,jpg,png,gif',
                'product_price'=> 'required|max:10|min:2',

            ]);
        if($validator->fails())
        {
            session::flash('coc', 'Product Details Not Uploaded The Database');
            return redirect('product/create')
                    ->withErrors($validator)
                    ->withInput();
        } 
        $image = $request->file('product_image');
        $upload = 'image/';
        $filename = time().$image->getClientOriginalName();
        $path = move_uploaded_file($image->getPathName(), $upload.$filename);
       $product = new products;
       $product->product_name = $request->product_name;
       $product->product_image = $filename;
       $product->product_price= $request->product_price;
       $product->save();
       session::flash('cc', 'Product  Details Uploaded Successfully In Database ');
        return redirect('product/create');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       $products = Products::all();
        return view('product.show', compact('products'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Products::find($id);
        return view('product.edit', compact('product'));    
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(),
            [
                'product_name'=>'required|max:20|min:5',
                'product_image' => 'required|mimes:jpeg,jpg,png,gif',
                'product_price'=> 'required|max:10|min:3',

            ]);
        if($validator->fails())
        {
            session::flash('coc', 'Product Details Not Uploaded The Database');
            return redirect('product/create')
                    ->withErrors($validator)
                    ->withInput();
        } 
        $image = $request->file('product_image');
        $upload = 'image/';
        $filename = time().$image->getClientOriginalName();
        $path = move_uploaded_file($image->getPathName(), $upload.$filename);
       $product = Products::find($id);
       $product->product_name = $request->product_name;
       $product->product_image = $filename;
       $product->product_price= $request->product_price;
       $product->save();
       session::flash('cc', 'Product  Details Updated Successfully');
        return redirect('product/create');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
    $product = products::find($id);
    $product->delete();
    return redirect('product/show')->with('dc', 'Product has been deleted');
    }
}
