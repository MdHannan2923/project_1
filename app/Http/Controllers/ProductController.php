<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use Carbon\Carbon;
class ProductController extends Controller{

public function __construct(){
    $this->middleware('auth');
}

    public function index(){
        $product=Product::orderBy('id','DESC')->paginate(3);
        return view ('backend.product', compact('product'));

    }

    public function product_insert(Request $request){
        Product::insert([
            'Product_Name'=>$request ->product_name,
            'Product_Description'=>$request->product_description,
            'Product_Price'=>$request->product_price,
            'Product_Quantity'=>$request->product_quantity,
            'Created_at'=> Carbon::now()


        ]);

        return back()->with('status', 'Product Insert Successfully');
       

    }
    public function product_edit($id){
        // echo "$id";
        
        $product=Product::find($id);
        return view ('backend.product_edit',compact('product'));
    }
       
    public function product_update(Request $request){

        Product::find ($request->id)->update([
            'Product_Name'=>$request ->product_name,
            'Product_Description'=>$request->product_description,
            'Product_Price'=>$request->product_price,
            'Product_Quantity'=>$request->product_quantity,
            'Updated_at'=> Carbon::now()


        ]);
        return redirect('/product');
    }
    public function product_delete($id){
        Product::findOrfail($id)->delete();
        return back()->with('delete','Delete Successfully');
    }
}
