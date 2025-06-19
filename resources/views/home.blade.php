@extends('layout')
@section('title', 'My E-Commerce')
@section('content')

  <!-- Hero Section -->
  <header class="bg-light text-center py-5 mb-4">
    <div class="container">
      <h1 class="fw-bold">Welcome to MyStore</h1>
      <p class="lead">Find the best products at unbeatable prices</p>
    </div>
  </header>

  <!-- Product Grid -->
  <div class="container mb-5">
    <div class="row">
      <!-- Product Card -->
       @foreach ($products as $product)
      <div class="col-md-4 mb-4">
        <div class="card h-100">
          <img src="{{$product->image}}" class="card-img-top" alt="Product">
          <div class="card-body">
            <h5 class="card-title">{{$product->name}}</h5>
            <p class="card-text">{{$product->price}}</p>
            <a href="#" class="btn btn-primary">Add to Cart</a>
          </div>
        </div>
      </div>
      @endforeach
      <div class="col-12">
          {{ $products->links() }}
        </div>

      </div>
      
    </div>
  </div>
@endsection

