<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    public function index(){
        $barang = Barang::all();
        return view('barang.index',compact(['barang']));
    }

    public function create(){
        return view('barang.create');
    }

    public function store(Request $request){
        Barang::create($request->except(['_token','submit']));
        return redirect('/barang');
    }

    public function edit($id){
        $barang = Barang::find($id);
        return view('barang.edit',compact(['barang']));
    }

    public function update($id, Request $request){
        $barang = Barang::find($id);
        $barang -> update($request->except(['_token','submit']));
        return redirect('/barang');
    }

    public function destroy($id){
        $barang = Barang::find($id);
        $barang->delete();
        return redirect('/barang');

    }

    public function search(){
        $search_text =$_GET['query'];
        $barang = Barang::where('kode_barang', 'LIKE','%'.$search_text.'%')->get();
        $barang = Barang::where('nama_barang', 'LIKE','%'.$search_text.'%')->get();
        $barang = Barang::where('kategori_barang', 'LIKE','%'.$search_text.'%')->get();
        return view('barang.search',compact('barang'));
    }
}
