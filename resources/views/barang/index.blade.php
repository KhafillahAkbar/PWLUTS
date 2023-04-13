@extends('layout.master')

@section('content')
<div class = "container">
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
    <form class="form-inline my-2 my-lg-0" type="GET" action="{{ url('barang/search')}}">
      <input class="form-control mr-sm-2" name = "query" type="search" placeholder="Search" aria-label="Search"><br>
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav><br>
<a class="btn btn-primary" href ="barang/create">Add Barang</a>
<table class="table table-hover">
    <tr>
        <th>id_barang</th>
        <th>kode_barang</th>
        <th>nama_barang</th>
        <th>kategori_barang</th>
        <th>Harga</th>
        <th>Qty</th>
        <th>Action</th>
    </tr>
    @foreach($barang as $w)
    <tr>
        <td>{{$w-> id}}</td>
        <td>{{$w-> kode_barang}}</td>
        <td>{{$w-> nama_barang}}</td>
        <td>{{$w-> kategori_barang}}</td>
        <td>{{$w-> harga}}</td>
        <td>{{$w-> qty}}</td>
        <td> 
        <div class="btn-group" role="group" aria-label="Basic example">
            <a class="btn btn-warning" href="/barang/{{$w -> id}}/edit">Edit</a>
            <form  action="/barang/{{$w -> id}}" method="POST">
                @csrf
                @method('delete')
                <input class="btn btn-danger" type="submit" value="Delete">
            </form>
        </td>
    </tr>
    @endforeach
</table>

</div>
@endsection


