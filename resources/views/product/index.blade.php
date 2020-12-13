@extends('admin.layouts')
@section('content')
<h1 class="mt-4">Product</h1>
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
<button class="btn btn-warning"><a href="product/show">View All Products</a></button>
<button class="btn btn-warning"><a href="product/create">Add New Product</a></button>

@endsection