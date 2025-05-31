@extends('layout')
@section('title', 'toko madura')
@section('content')

  <!-- Halaman Keranjang -->
  <div class="container mt-5">
    <h2 class="mb-4">Keranjang Belanja Anda</h2>
    
    <div class="table-responsive">
      <table class="table align-middle">
        <thead class="table-dark">
          <tr>
            <th>Produk</th>
            <th>Nama</th>
            <th>Harga</th>
            <th>Jumlah</th>
            <th>Subtotal</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td><img src="https://via.placeholder.com/100x70" alt="Produk 1" class="img-thumbnail"></td>
            <td>Produk 1</td>
            <td>Rp100.000</td>
            <td><input type="number" value="1" class="form-control w-50"></td>
            <td>Rp100.000</td>
            <td><button class="btn btn-danger btn-sm">Hapus</button></td>
          </tr>
          <tr>
            <td><img src="https://via.placeholder.com/100x70" alt="Produk 2" class="img-thumbnail"></td>
            <td>Produk 2</td>
            <td>Rp150.000</td>
            <td><input type="number" value="2" class="form-control w-50"></td>
            <td>Rp300.000</td>
            <td><button class="btn btn-danger btn-sm">Hapus</button></td>
          </tr>
        </tbody>
      </table>
    </div>

    <!-- Ringkasan -->
    <div class="row mt-4">
      <div class="col-md-6 offset-md-6">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Total Belanja</h5>
            <p class="card-text fs-5">Total: <strong>Rp400.000</strong></p>
            <a href="#" class="btn btn-success w-100">Lanjut ke Pembayaran</a>
          </div>
        </div>
      </div>
    </div>

  </div>
@endsection

  