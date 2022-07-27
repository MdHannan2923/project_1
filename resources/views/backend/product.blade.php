@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center  bg-success">Product View</div>

                <div class="card-body">
                    <!-- @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif -->

                    <table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Product Name</th>
      <th scope="col">Product Description</th>
      <th scope="col">Product Price</th>
      <th scope="col">Product Quantity</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach($product as $value)
    <tr>
      <th scope="row">{{$value->id}}</th>
      <td>{{$value->Product_Name}}</td>
      <td>{{$value->Product_Description}}</td>
      <td>{{$value->Product_Price}}</td>
      <td>{{$value->Product_Quantity}}</td>
      <td><a href="{{url('/product/edit' ,$value->id)}} "  class="btn btn-outline-info">Edit</a>
      <a href="" class="btn btn-outline-danger">Delete</a></td>
    </tr>
    @endforeach(); 
    
  </tbody>
  
</table>
{{$product ->links()}}
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-header bg-primary text-white text-center">Product Insert</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form action="{{url('\product\insert')}}" method="POST">
                      @csrf
                    
      <div class="mb-3">
    <label class="form-label">Product Name</label>
    <input type="text" name="product_name" placeholder="Enter Product Name" >
    
  </div>
  <div class="mb-3">
    <label class="form-label">Product Description</label>
    <input type="text" name="product_description" placeholder="Enter Product Description" >
    
  </div>
  <div class="mb-3">
    <label class="form-label">Product Price</label>
    <input type="number" name="product_price" placeholder="Enter Product Price" >
    
  </div>
  <div class="mb-3">
    <label class="form-label">Product Quantity</label>
    <input type="number" name="product_quantity" placeholder="Enter Product Quantity" >
    
  </div class="center">
  <button type="submit" class="btn btn-success position=center" >Submit</button>
</form>


                </div>
            </div>
        </div>
    </div>
</div>
                    
                

@endsection
