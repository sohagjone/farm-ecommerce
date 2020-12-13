@extends('admin.layouts')
@section('content')
<h1 class="mt-4">Edit Product</h1>
<ol class="breadcrumb mb-4"></ol>
<button class="btn btn-warning"><a href="{{route('product.index')}}">Back To Admin  </a></button>
<button class="btn btn-warning"><a href="product/create">Add New Product</a></button>
   <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                </div>
<hr>
<div class="container">
<form method="post" enctype="multipart/form-data" action="{{route('product.update', $product->id)}}">
	@method('PATCH')
    @csrf
  <fieldset>
    <legend>Update The Product Details</legend>
    <div class="form-group">
      <input type="text" class="form-control" placeholder="Product Name" name="product_name" value="{{$product->product_name}}">
    </div>
     <div class="form-group">
      <label for="exampleInputFile">Product Image Upload</label>
      <input type="file" class="form-control-file" name="product_image">
    </div>
    <div class="form-group">
      <input type="text" class="form-control" placeholder="Product price" name="product_price" value="{{$product->product_price}}">
    </div>
    <button type="submit" class="btn btn-primary">Update</button>
  </fieldset>
</form>
</div>
@endsection