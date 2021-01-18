<p>
    {{$produk->harga}} |
    stok : {{$produk->stok}} |
    Berat : {{$produk->berat}} Kg |
    Seller : {{$produk->seller->username}} |
    Tanggal Produk : {{$produk->created_at->diffForHumans()}}
</p>