@extends('template.base')
@section('content')

<section id="main-content">
      <section class="wrapper ">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="row">
            <div class="col-md-12">
            </div>
            </div>
              <div class="card-header">
                Tambah Data User
              </div>
              <div class="card-body">
                 
                <form action="{{url('admin/user')}}" method="post">
                  @csrf
                  <div class="form group">
                      <label for="" class="control-label">Nama</label>
                      <input type="text" class="form-control" name="nama">
                  </div>
                  <div class="form group">
                      <label for="" class="control-label">Username</label>
                      <input type="text" class="form-control" name="username">
                  </div>
                  <div class="form group">
                      <label for="" class="control-label">Email</label>
                      <input type="email" class="form-control" name="email">
                  </div>
                  <div class="form group">
                      <label for="" class="control-label">Password</label>
                      <input type="password" class="form-control" name="password">
                  </div>
                  <div class="form group">
                      <label for="" class="control-label">No HP</label>
                      <input type="text" class="form-control" name="no_handphone">
                  </div>
                  
                  <button class="btn btn-dark float-right "><i class="fa fa-save"></i>Simpan</button>
                </form>
              </div>
          </div>>
        </div>
      </div>
      </section>
      <!-- /wrapper -->
    </section>
    @endsection