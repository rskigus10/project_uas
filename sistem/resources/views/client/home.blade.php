@extends('client.base')
@section('content')
<div class="features_items">
    <!--features_items-->
    <h2 class="title text-center">Features Items</h2>
    <div class="card body">
        <div class="row">
            @foreach($list_produk as $item)
            <div class="col-sm-4">
                <div class="product-image-wrapper">
                    <div class="single-products">
                       
                        <div class="productinfo text-center">
                            <img src="{{url("public/$item->foto")}}" alt="" style="width : 120px; height : 120px;">
                            <h2>{{$item->harga}}</h2>
                            <p>{{$item->nama}}</p>
                            <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                        </div>
                        <div class="product-overlay">
                            <div class="overlay-content">
                                <h2>Stok: {{$item->stok}}</h2>
                                <p>{{$item->deskripsi}}</p>
                                <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                            </div>
                        </div>
                    </div>
                    <div class="choose">
                        <ul class="nav nav-pills nav-justified">
                            <li><a href="#"><i class="fa fa-plus-square"></i>Add to wishlist</a></li>
                            <li><a href="#"><i class="fa fa-plus-square"></i>Add to compare</a></li>
                        </ul>
                    </div>
                </div>
            </div> 
            @endforeach
            <div class="row">
                <div class="col-md-6">
                    <div class="d-flex justify-content-center">
                        {{$list_produk->links()}}
                    </div>
                </div>
            </div>
        </div>
    </div>
        </div>
    </div>
</div>
@endsection
@push('script')
    <script>
        function gantiProvinsi(id){
            $.get("api/provinsi/"+id, function(result){
                result = JSON.parse(result)
                option = ""
                for(item of result){
                    option += `<option value="${item.id}">${item.nama}</option>`;
                }
                $("#kabupaten").html(option)
            });
        }

        function gantiKabupaten(id){
            $.get("api/kabupaten/"+id, function(result){
                result = JSON.parse(result)
                option = ""
                for(item of result){
                    option += `<option value="${item.id}">${item.nama}</option>`;
                }
                $("#kecamatan").html(option)
            });
        }

        function gantiKecamatan(id){
            $.get("api/kecamatan/"+id, function(result){
                result = JSON.parse(result)
                option = ""
                for(item of result){
                    option += `<option value="${item.id}">${item.nama}</option>`;
                }
                $("#desa").html(option)
            });
        }
    </script>
@endpush