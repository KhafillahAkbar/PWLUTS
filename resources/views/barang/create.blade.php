@extends('layout.master')

@section('content')

<div class = "container">
<h1> Add Barang</h1>
<form action="/barang/store" method="POST">
    @csrf
    <div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Kode Barang</label>
  <input type="text" name="kode_barang" class="form-control" id="exampleFormControlInput1" placeholder="kode barang">
    </div>
    <div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Nama Barang</label>
  <input type="text" name="nama_barang" class="form-control" id="exampleFormControlInput1" placeholder="nama barang">
    </div>
    <div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Kategori barang</label>
  <input type="text" name="kategori_barang" class="form-control" id="exampleFormControlInput1" >
    </div>
    <div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Harga</label>
  <input type="text" name="harga" class="form-control" id="exampleFormControlInput1" placeholder="harga">
    </div>
    <div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Quantity</label>
  <input type="text" name="qty" class="form-control" id="exampleFormControlInput1" placeholder="qty">
    </div>
    <input class="btn btn-primary" type ="submit" name="submit" value="Save" >
</form>
</div>
@endsection
