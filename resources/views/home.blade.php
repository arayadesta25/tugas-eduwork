@extends('layout')
@section('title', 'toko madura')
@section('content')

  <!-- Hero Banner -->
  <div class="container mt-4">
    <div class="p-5 mb-4 bg-light rounded-3">
      <div class="container-fluid py-5">
        <h1 class="display-5 fw-bold">buka 25 jam Tutup ketika kiamat</h1>
        <p class="fs-4">Belanja kebutuhanmu dengan harga terbaik dan kualitas terpercaya.</p>
        <a href="#" class="btn btn-primary btn-lg">Lihat Semua Produk</a>
      </div>
    </div>
  </div>

  <!-- Produk Unggulan -->
  <div class="container mb-5">
    <h2 class="mb-4">Produk Unggulan</h2>
    <div class="row row-cols-1 row-cols-md-4 g-4">

      <!-- Produk 1 -->
      <div class="col">
        <div class="card h-100 shadow-sm">
          <img src="https://via.placeholder.com/300x200" class="card-img-top" alt="Produk 1">
          <div class="card-body">
            <h5 class="card-title">Produk 1</h5>
            <p class="card-text">Deskripsi singkat produk ini.</p>
            <p class="fw-bold text-primary">Rp100.000</p>
            <a href="#" class="btn btn-outline-primary w-100">Lihat Detail</a>
          </div>
        </div>
      </div>

      <!-- Produk 2 -->
      <div class="col">
        <div class="card h-100 shadow-sm">
          <img src="https://via.placeholder.com/300x200" class="card-img-top" alt="Produk 2">
          <div class="card-body">
            <h5 class="card-title">Produk 2</h5>
            <p class="card-text">Deskripsi singkat produk ini.</p>
            <p class="fw-bold text-primary">Rp200.000</p>
            <a href="#" class="btn btn-outline-primary w-100">Lihat Detail</a>
          </div>
        </div>
      </div>

      <!-- Produk 3 -->
      <div class="col">
        <div class="card h-100 shadow-sm">
          <img src="https://via.placeholder.com/300x200" class="card-img-top" alt="Produk 3">
          <div class="card-body">
            <h5 class="card-title">Produk 3</h5>
            <p class="card-text">Deskripsi singkat produk ini.</p>
            <p class="fw-bold text-primary">Rp300.000</p>
            <a href="#" class="btn btn-outline-primary w-100">Lihat Detail</a>
          </div>
        </div>
      </div>

      <!-- Produk 4 -->
      <div class="col">
        <div class="card h-100 shadow-sm">
          <img src="https://via.placeholder.com/300x200" class="card-img-top" alt="Produk 4">
          <div class="card-body">
            <h5 class="card-title">Produk 4</h5>
            <p class="card-text">Deskripsi singkat produk ini.</p>
            <p class="fw-bold text-primary">Rp400.000</p>
            <a href="#" class="btn btn-outline-primary w-100">Lihat Detail</a>
          </div>
        </div>
      </div>

    </div>
  </div>

 
@endsection
 