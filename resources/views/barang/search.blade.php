@extends('layout.master')

@section('content')
<div class = "container">
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