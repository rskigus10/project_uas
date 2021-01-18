@inject('timeService', 'App\Services\TimeServices')

@extends('template.base')

@section('content')
<section id="main-content">
      <section class="wrapper ">
      <div class="container">
        <div class="row mt">
          <div class="col-md-12">
              <div class="row">
                <div class="col-md-12">
                </div>
              </div>
              <div class="card">
                <div class="card-header">
                  <div class="float-right">
                   jam : {{$timeService->showTimeNow()}}
                  </div>
                    Filter
                </div>
                <div class="div card-body">
                  <form action="{{url('admin/produk/filter')}}" method="post">
                        @csrf
                      <div class="div form-group">
                        <label for="" class="control-lable">Nama</label>
                        <input type="text" class="form-control" name="nama" value="{{$nama ?? ""}}">
                      </div>
                      <div class="div form-group">
                        <label for="" class="control-lable">Stok</label>
                        <input type="text" class="form-control" name="stok" value="{{$stok ?? ""}}">
                      </div>
                      <div class="row">
                        <div class="col-md-6">
                          <label for="" class="control-lable">Harga Min</label>
                          <input type="text" class="form-control" name="harga_min" value="{{$harga_min ?? ""}}">  
                        </div>
                        <div class="col-md-6">
                          <label for="" class="control-lable">Harga Max</label>
                          <input type="text" class="form-control" name="harga_max" value="{{$harga_max ?? ""}}">     
                        </div>
                      </div>
                      <button class="btn btn-dark float-right mt-2"><i class="fa fa-search"></i> Filter</button> 
                  </form>
                </div>
              </div>
            <div class="card">
              <div class="card-header">
                Data Produk
                <a href="{{url('admin/produk/create')}}" class="btn btn-info float-right"><i class="fa fa-plus"></i>Tambah Data</a>
              </div>
              <div class="card-body">
                <table class="table table-datatable">
                  <thead>
                    <th>No</th>
                    <th>Aksi</th>
                    <th>Nama</th>
                    <th>Harga</th>
                    <th>Stok</th>
                  </thead>
                  <tbody>
                    @foreach($list_produk as $produk)
                    <tr>
                      <td>{{$loop->iteration}}</td>
                      <td>
                          <div class="btn-group">
                            <a href="{{url('admin/produk', $produk->id)}}" class="btn btn-dark"><i class="fa fa-info"></i></a>
                            <a href="{{url('admin/produk', $produk->id)}}/edit" class="btn btn-warning"><i class="fa fa-edit"></i></a>
                            @include('template.utils.delete', ['url' => url('admin/produk', $produk->id)])
                          </div>
                      </td>
                      <td>{{$produk->nama}}</td>
                      <td>{{$produk->harga}}</td>
                      <td>{{$produk->stok}}</td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
      </section>
      <!-- /wrapper -->
    </section>
@endsection
