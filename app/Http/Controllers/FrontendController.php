<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class FrontendController extends Controller
{
   public function index(){
      $product=Product::all();
    return view('frontend.main',compact('product'));
   }
}
