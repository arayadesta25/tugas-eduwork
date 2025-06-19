@extends('layout')
@section('title', 'Shopping Cart - MyStore')
@section('content')

  

  <!-- Shopping Cart Section -->
  <div class="container my-5">
    <h2 class="mb-4">Shopping Cart</h2>
    <div class="table-responsive">
      <table class="table align-middle">
        <thead class="table-light">
          <tr>
            <th>Product</th>
            <th>Name</th>
            <th>Price</th>
            <th style="width: 120px;">Quantity</th>
            <th>Subtotal</th>
            <th></th>
          </tr>
        </thead>
        <tbody>
          <!-- Item 1 -->
          <tr class="cart-item">
            <td><img src="https://via.placeholder.com/100" alt="Product"></td>
            <td>Product Name 1</td>
            <td>$19.99</td>
            <td><input type="number" class="form-control" value="1" min="1"></td>
            <td>$19.99</td>
            <td><button class="btn btn-sm btn-danger">Remove</button></td>
          </tr>
          <!-- Item 2 -->
          <tr class="cart-item">
            <td><img src="https://via.placeholder.com/100" alt="Product"></td>
            <td>Product Name 2</td>
            <td>$29.99</td>
            <td><input type="number" class="form-control" value="2" min="1"></td>
            <td>$59.98</td>
            <td><button class="btn btn-sm btn-danger">Remove</button></td>
          </tr>
        </tbody>
      </table>
    </div>

    <!-- Cart Summary -->
    <div class="row mt-4">
      <div class="col-md-6">
        <a href="shop.html" class="btn btn-outline-secondary">Continue Shopping</a>
      </div>
      <div class="col-md-6 text-end">
        <p class="cart-total">Total: <span class="text-success">$79.97</span></p>
        <a href="#" class="btn btn-success">Proceed to Checkout</a>
      </div>
    </div>
  </div>

  

@endsection
