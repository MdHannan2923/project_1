@extends("layouts.app")
@section('content')
<div class="container">
    <div class="row justify-content-center">
        
        <div class="col-md-6">
            <div class="card">
                <div class="card-header bg-primary text-white text-center">Product Update</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form action="{{url('/product/update')}}" method="post">
                      @csrf
                      <input type="text" value="{{$product->id}}" name="id">
                    
      <div class="mb-3">
    <label class="form-label">Product Name</label>
    <input type="text" name="product_name" value="{{$product->Product_Name}}" placeholder="Enter Product Name" >
    
  </div>
  <div class="mb-3">
    <label class="form-label">Product Description</label>
    <input type="text" name="product_description" value="{{$product->Product_Description}}" placeholder="Enter Product Description" >
    
  </div>
  <div class="mb-3">
    <label class="form-label">Product Price</label>
    <input type="number" name="product_price" value="{{$product->Product_Price}}" placeholder="Enter Product Price" >
    
  </div>
  <div class="mb-3">
    <label class="form-label">Product Quantity</label>
    <input type="number" name="product_quantity" value="{{$product->Product_Quantity}}" placeholder="Enter Product Quantity" >
    
  </div class="center">
  <button type="submit" class="btn btn-success justify-content-center" >Update</button>
</form>


                </div>
            </div>
        </div>
    </div>
</div>
                    
                    
@endsection