<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Products;

class ProductViewController extends Controller
{
    public function index()
    {
    	
    	$products =  Products::paginate(9);
    	return view('productview.index', compact('products'));
    }
    public function home()
    {
    	 return view('productview.home');
    }
}
