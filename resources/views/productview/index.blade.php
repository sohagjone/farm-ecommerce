@extends('admin.frontlayouts')
@section('content')
<ol class="breadcrumb mb-4">
</ol>
<h1 class="mt-4">Fresh Product</h1>
<div class="row">
 @foreach($products->all() as $product)
  <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" 
              src="{{ asset("image/$product->product_image") }}" 
              </a>
              <div class="card-body">
                <h4 class="card-title">
                  <center><a href="#">{{$product->product_name}}</a></center>
                </h4>
                <center><h5>${{$product->product_price}}</h5></center>
              </div>
              <div class="card-footer" >
        <center> <a href="#"
        class="btn btn-success" role="button">Add to Cart</a>
              </div></center>
            </div>
          </div>
    @endforeach
  <div class="col-12 text-center">
  {{$products->links()}}
  </div>
@endsection
