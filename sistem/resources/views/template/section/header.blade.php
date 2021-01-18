<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <ul class="navbar-nav">
      <li class="nav-item d-none d-sm-inline-block">
        <a href="{{url('template/base')}}" class="nav-link">home</a>
      </li>
    </ul>

    <form class="form-inline ml-3">
      <div class="input-group input-group-sm">
        <input class="form-control" list="datalistOptions" id="exampleDataList" placeholder="Type to search...">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form>
      <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          @if(Auth::check())
            {{request()->user()->nama}}
          @else
            Silahkan Login
          @endif
          <img src="{{url('public')}}/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image" style= "width: 30px;">
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <a href="#" class="dropdown-item">
            <i class="fa fa-user"></i> Profile
          </a>
          <a href="{{url('setting')}}" class="dropdown-item">
            <i class="fa fa-cog"></i> Setting
          </a>
          <a href="#" class="dropdown-item">
            <i class="fa fa-cog"></i> Ganti Bahasa
          </a>
          <a href="{{url('logout')}}" class="dropdown-item">
            <i class="fa fa-sign-out"></i> Logout
          </a>
        </div>
      </li>
    </ul>
    
</nav>