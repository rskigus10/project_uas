<div class="left-sidebar">
    <h2>Filter</h2>
    <div class="panel-group category-products" id="accordian">
        <div class="card">
                <div class="card-header">
                    Filter
                </div>
                <div class="div card-body">
                  <form action="{{url('client/produk/filter')}}" method="post">
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
    </div>

    <div class="brands_products">
        <!--brands_products-->
        <h2>Brands</h2>
        <div class="brands-name">
            <ul class="nav nav-pills nav-stacked">
                <li>
                    <a href="#"> <span class="pull-right">(50)</span>Acne</a>
                </li>
                <li>
                    <a href="#"> <span class="pull-right">(56)</span>Grüne Erde</a>
                </li>
                <li>
                    <a href="#"> <span class="pull-right">(27)</span>Albiro</a>
                </li>
                <li>
                    <a href="#"> <span class="pull-right">(32)</span>Ronhill</a>
                </li>
                <li>
                    <a href="#"> <span class="pull-right">(5)</span>Oddmolly</a>
                </li>
                <li>
                    <a href="#"> <span class="pull-right">(9)</span>Boudestijn</a>
                </li>
                <li>
                    <a href="#"> <span class="pull-right">(4)</span>Rösch creative culture</a>
                </li>
            </ul>
        </div>
    </div>
    <!--/brands_products-->

    <div class="price-range">
        <!--price-range-->
        <h2>Price Range</h2>
        <div class="well text-center">
            <input type="text" class="span2" value="" data-slider-min="0" data-slider-max="600" data-slider-step="5" data-slider-value="[250,450]" id="sl2"><br />
            <b class="pull-left">$ 0</b> <b class="pull-right">$ 600</b>
        </div>
    </div>
    <!--/price-range-->
</div>