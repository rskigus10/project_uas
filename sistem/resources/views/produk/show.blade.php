@extends('template.base')
@section('content')
<section id="main-content">
      <section class="wrapper ">
        <h3><i class="fa fa-angle-right"></i>Detail Data Produk</h3>
      <div class="container">
        <div class="row">
          <div class="col-md-12">
              <div class="card-body">
                <h3>{{$produk->nama}}</h3>
                <hr>
                    @include('produk.show.detail')
                <p>
                    {!! nl2br($produk->deskripsi) !!}
                </p>
                <p>
                    <img src="{{url("public/$produk->foto")}}" alt="">
                </p>
              </div>
          </div>
        </div>
      </div>
      </section>
      <!-- /wrapper -->
    </section>
@endsection