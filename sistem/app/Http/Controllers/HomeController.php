<?php

namespace App\Http\Controllers;
use App\Models\Produk;
use App\Models\Provinsi;

class HomeController extends Controller{

    function showHome(){
        $data['list_produk'] = Produk::Paginate(6);
        $data['list_provinsi'] = Provinsi::all();
        return view('client.home', $data);
    }

    function showCheckout(){
        return view('client.checkout');
    }
    function showtemplate(){
        return view('template.base');
    }

    function showCard(){
        return view('card');
    }

    function showClient(){
        $produk = new Produk;
        $produk->nama = request('nama');
        $produk->stok = request('stok');
        $produk->harga = request('harga');
        $produk->berat = request('berat');
        $produk->deskripsi = request('deskripsi');
        $produk->save();

        return redirect("client")->with('success', 'Data Berhasil Ditambahkan');
    }

    function showProduct(){
        return view("template.product");
    }

    function showPromo(){
        return view("template.promo");
    }

    function filter(){
        $nama = request('nama');
        // $stok = explode(",", request('stok'));
        // $data['harga_min'] = $harga_min = request('harga_min');
        // $data['harga_max'] = $harga_max = request('harga_max');
        $data['list_produk'] = Produk::where('nama', 'like', "%$nama%")->get();
        // $data['list_produk'] = Produk::whereIn('stok',  $stok)->get();
        // $data['list_produk'] = Produk::whereBetween('harga', [$harga_min, $harga_max])->get();
        // $data['list_produk'] = Produk::where('stok', '<>', $stok)->get();
        // $data['list_produk'] = Produk::whereNotIn('stok',  $stok)->get();
        // $data['list_produk'] = Produk::whereNotBetween('harga', [$harga_min, $harga_max])->get();
        // $data['list_produk'] = Produk::whereDate('created_at', '2020-11-12')->get();
        // $data['list_produk'] = Produk::whereNotBetween('harga', [$harga_min, $harga_max])->whereYear('created_at', ('2020'))->get();
        $data['nama'] = $nama;
        return view('client.home', $data);
    }

    public function testCollection()
    {
        $list_bike = ['Honda', 'Yamaha', 'Kawasaki', 'Suzuki', 'Vespa', 'BMW', 'KTM'];
        $list_bike = collect($list_bike);
        $list_produk = Produk::all();

        //sporting

        //sort by harga terendah
        //dd($list_produk->sortBy('harga'));
        //sort by harga tertinggi
        //dd($list_produk->sortByDesc('harga'));
       // $data['list'] = $list_produk;
        //return view('test-collection', $data);

        //map
        //$filtered = $list_produk->filter(function($item){
            //return $item->harga < 50000;
        //});
        //dd($filtered);

        //$sum = $list_produk->max('stok');
        //dd($sum);

        $data['list'] = Produk::Paginate(10) ;
        return view('test-collection', $data);

        dd($list_bike, $list_produk);
    }

    function cardPembelian(){
        $data['list_provinsi'] = Provinsi::all();
        return view('card', $data);
    }

}