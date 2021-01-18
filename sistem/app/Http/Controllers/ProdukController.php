<?php

namespace App\Http\Controllers;
use App\Models\Produk;
use App\Http\Requests\ProdukStoreRequest;


class ProdukController extends Controller {
    function index(){
        $user = request()->user();
        $data['list_produk'] = $user->produk;
        return view('produk.index', $data);
    }
    function create(){
        return view('produk.create');

    }
    function store(ProdukStoreRequest $request){
        $produk = new Produk;
        $produk->id_user = request()->user()->id;
        $produk->nama = request('nama');
        $produk->stok = request('stok');
        $produk->harga = request('harga');
        $produk->berat = request('berat');
        $produk->deskripsi = request('deskripsi');
        $produk->save();

        $produk->handleUploadFoto();

        return redirect('admin/produk')->with('success', 'Data Berhasil Ditambahkan');
    }
    function show(Produk $produk){
        $data['produk'] = $produk;    
        return view('produk.show', $data);
    }
    function edit(Produk $produk){
        $data['produk'] = $produk;    
        return view('produk.edit', $data);

    }
    function update(Produk $produk){
        $produk->nama = request('nama');
        $produk->stok = request('stok');
        $produk->harga = request('harga');
        $produk->berat = request('berat');
        $produk->deskripsi = request('deskripsi');
        $produk->save();

        $produk->handleUploadFoto();

        return redirect('admin/produk')->with('warning', 'Data Berhasil Diupdate');
    }
    function destroy(Produk $produk){
        $produk->handleDelete();
        $produk->delete();
        return redirect('admin/produk')->with('danger', 'Data Berhasil Dihapus');
    }

    function filter(){
        $nama = request('nama');
        $stok = explode(",", request('stok'));
        //$data['harga_min'] = $harga_min = request('harga_min');
       //$data['harga_max'] = $harga_max = request('harga_max');
        //$data['list_produk'] = Produk::where('nama', 'like', "%$nama%")->get();
        //$data['list_produk'] = Produk::whereIn('stok',  $stok)->get();
        //$data['list_produk'] = Produk::whereBetween('harga', [$harga_min, $harga_max])->get();
        //$data['list_produk'] = Produk::where('stok', '<>', $stok)->get();
        //$data['list_produk'] = Produk::whereNotIn('stok',  $stok)->get();
        //$data['list_produk'] = Produk::whereNotBetween('harga', [$harga_min, $harga_max])->get();
        //$data['list_produk'] = Produk::whereDate('created_at', '2020-11-12')->get();
        //$data['list_produk'] = Produk::whereNotBetween('harga', [$harga_min, $harga_max])->whereYear('created_at', ('2020'))->get();
        $data['nama'] = $nama;
        $data['stok'] = request('stok');


        return view('produk.index', $data);
    }

    
}