@extends('template.base')
@section('content')

    <section id="main-content">
      <section class="wrapper ">
        <h3><i class="fa fa-angle-right"></i>USER</h3>
      <div class="container">
        <div class="row mt">
          <div class="col-md-12">
              <div class="row">
              <div class="col-md-12">
              @include('template.utils.notif')
              </div>
              </div>
            <div class="card">
              <div class="card-header">
                Data User
                <a href="{{url('admin/user/create')}}" class="btn btn-info float-right"><i class="fa fa-plus"></i>Tambah Data</a>
              </div>
              <div class="card-body">
                <table class="table">
                  <thead>
                    <th>No</th>
                    <th>Aksi</th>
                    <th>Nama</th>
                    <th>Username</th>
                    <th>Jenis Kelamin</th>
                    <th>Email</th>
                  </thead>
                  <tbody>
                    @foreach($list_user as $user)
                    <tr>
                      <td>{{$loop->iteration}}</td>
                      <td>
                          <div class="btn-group">
                            <a href="{{url('admin/user', $user->id)}}" class="btn btn-dark"><i class="fa fa-info"></i></a>
                            <a href="{{url('admin/user', $user->id)}}/edit" class="btn btn-warning"><i class="fa fa-edit"></i></a>
                            @include('template.utils.delete', ['url' => url('admin/user', $user->id)])
                          </div>
                      </td>
                      <td>{{$user->nama}}</td>
                      <td>{{$user->username}}</td>
                      <td>{{$user->jenis_kelamin_string}}</td>
                      <td>{{$user->email}}</td>
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
    