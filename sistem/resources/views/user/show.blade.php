@extends('template.base')
@section('content')
   
    <section id="main-content">
      <section class="wrapper ">
        <h3><i class="fa fa-angle-right"></i>Detail Data User</h3>
      <div class="container">
        <div class="row">
          <div class="col-md-12">
              <div class="card-body">
                <h3>{{$user->nama}}</h3>
                <hr>
                <p>
                  {{"@".$user->username}} |
                  Email : {{$user->email}}
                </p>
                <p>
                  No Handphone : {{$user->detail->no_handphone}}
                </p>
              </div>
          </div>
        </div>
      </div>
      </section>
      <!-- /wrapper -->
    </section>
   @endsection