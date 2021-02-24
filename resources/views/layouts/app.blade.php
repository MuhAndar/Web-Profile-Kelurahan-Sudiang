<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title> @yield('title') </title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css')}}">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('fonts/font-awesome.min.css')}}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="{{ asset('fonts/ionicons.min.css')}}">
  <!-- custom css-->
  @stack('customcss')
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('dist/css/AdminLTE.min.css')}}">
  <link rel="stylesheet" href="{{ asset('dist/css/skins/_all-skins.min.css')}}">

</head>
<body class="hold-transition skin-purple sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="#" class="logo">
      <span class="logo-mini"><b>A</b>LT</span>
      <span class="logo-lg">Laravel Blog<b>Admin</b>LTE</span>
    </a>
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
              <span class="hidden-xs">{{Auth::user()->name}}</span>
            </a>
            <ul class="dropdown-menu">
              <li class="user-footer">
                <div class="pull-right">
                    <a class="btn btn-default btn-flat" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                     {{ __('Sign out') }}
                    </a>
                   <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                     @csrf
                   </form>
                </div>
              </li>
            </ul>
          </li>
          <li>
            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
          </li>
        </ul>
      </div>
    </nav>
  </header>


  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>{{ Auth::user()->name }}</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>

      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Home</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ route('tengah.index') }}"><i class="fa fa-phone-square-alt"></i>Tengah</a></li>
            <li><a href="{{ route('populasi.index') }}"><i class="fa fa-phone-square-alt"></i>Populasi</a></li>
          </ul>
        </li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-user"></i> <span>Profil</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ route('sambutan.index') }}"><i class="fa fa-phone-square-alt"></i>Sambutan</a></li>
            <li><a href="{{ route('ringkasan.index') }}"><i class="fa fa-phone-square-alt"></i>Ringkasan</a></li>
            <li><a href="{{ route('visimisi.index') }}"><i class="fa fa-phone-square-alt"></i>Visi & Misi</a></li>
          </ul>
        </li>

        <li><a href="{{ route('staff.index') }}"><i class="fa fa-users"></i>Staff</a></li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-book"></i> <span>Syarat Kepengurusan</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ route('sekretaris.index') }}"><i class="fa fa-phone-square-alt"></i>Sekretaris</a></li>
            <li><a href="{{ route('kebersihan.index') }}"><i class="fa fa-phone-square-alt"></i>Kepala Seksi Kebersihan</a></li>
            <li><a href="{{ route('pemerintahan.index') }}"><i class="fa fa-phone-square-alt"></i>Kepala Seksi Pemerintahan</a></li>
            <li><a href="{{ route('perekonomian.index') }}"><i class="fa fa-phone-square-alt"></i>Kepala Seksi Perekonomian</a></li>
          </ul>
        </li>
        <li class="treeview">

            {{-- <li><a href="{{ route('categories.index') }}"><i class="fa fa-adjust"></i>Categories</a></li>
            <li><a href="{{ route('articles.index') }}"><i class="fa fa-user"></i>Artikel</a></li>
            <li><a href="{{ route('articles.index') }}"><i class="fa fa-book"></i>Syarat</a></li> --}}
            <li><a href="{{ route('kontaks.index') }}"><i class="fa fa-adjust"></i>Kontak</a></li>
          </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
       @yield('page-title')
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
        @yield('content')
    </section>
  </div>
  <!-- /.content-wrapper -->

<script src="{{ asset('plugins/jQuery/jquery-2.2.3.min.js')}}"></script>
<!-- Bootstrap 3.3.6 -->
<script src="{{ asset('bootstrap/js/bootstrap.min.js')}}"></script>
@stack('datatables')
<!-- SlimScroll -->
<script src="{{ asset('plugins/slimScroll/jquery.slimscroll.min.js')}}"></script>
<!-- FastClick -->
<script src="{{ asset('plugins/fastclick/fastclick.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('dist/js/app.min.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ asset('dist/js/demo.js')}}"></script>
@stack('customdatatables')
</body>
</html>
