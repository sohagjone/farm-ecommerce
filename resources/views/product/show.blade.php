@extends('admin.layouts')
@section('content')
<h1 class="mt-4">View All Product</h1>
<ol class="breadcrumb mb-4">
<h5 style="color:red;">{{ Auth::user()->name }}</h5>
   <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                  </div>
                  </ol>
<button class="btn btn-warning"><a href="{{route('product.index')}}">Back To Admin</a></button>
@if (Session::has('dc'))
         <div class="alert alert-danger">
          <button class="close" data-dismiss="alert">*</button>
          <strong>{{session('dc')}}</strong>
         </div>
         @endif
<table id="dtBasicExample" class="table table-striped table-bordered table-sm" cellspacing="0" width="100%">
  <thead>
    <tr>
      <th class="th-sm">Product Id</th>
      <th class="th-sm">Product Name</th>
      <th class="th-sm">Product Image</th>
      <th class="th-sm">Product Price</th>
      <th class="th-sm">Edit</th>
      <th class="th-sm">Delete</th>
    </tr>
    </thead>
    <tbody>
    @foreach($products->all() as $product)
       <tr>
       <td>{{$product->id}}</td>
      <td>{{$product->product_name}}</td>
    <td><img src="{{ asset("image/$product->product_image") }}" width="30"></td>
    <td>{{$product->product_price}}</td>
      <td><a href="{{route('product.edit', $product->id)}}">Edit</td>
      <form method="post" action="{{ route('product.destroy', $product->id)}}">
      @method('DELETE')
      @csrf
      <td><input type="Submit" name="" value="Delete" ></td></form>
    </tr>
    @endforeach
    </tbody>
</table> 

@endsection


