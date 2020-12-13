@extends('admin.layouts')
@section('content')
<h1 class="mt-4">Product</h1>
<ol class="breadcrumb mb-4"></ol>
<button class="btn btn-warning"><a href="{{route('product.index')}}">Back To Admin </a></button>

   <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                </div>
<hr>
@if(Session::has('cc'))
<div class="alert alert-success">
<button class="close" data-dismis="alert">X</button>
<strong>{{session('cc')}}</strong>
</div>
@endif
@if(Session::has('coc'))
<div class="alert alert-danger">
	<button class="close" data-dismis="alert">X</button>
	<strong>{{session('coc')}}</strong>
	<ul>
		@foreach ($errors->all() as $error)
		<li>
			{{$error}}
		</li>
		@endforeach
	</ul>
</div>
@endif
<div class="container">
<form method="post" enctype="multipart/form-data" action="{{route('product.store')}}">
	@csrf
  <fieldset>
    <legend>Add the Product Details</legend>
    <div class="form-group">
      <input type="text" class="form-control" placeholder="Product Name" name="product_name">
    </div>
     <div class="form-group">
      <label for="exampleInputFile">Product Image Upload</label>
      <input type="file" class="form-control-file" name="product_image">
    </div>
    <div class="form-group">
      <input type="text" class="form-control" placeholder="Product price" name="product_price">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </fieldset>
</form>
</div>
@endsection