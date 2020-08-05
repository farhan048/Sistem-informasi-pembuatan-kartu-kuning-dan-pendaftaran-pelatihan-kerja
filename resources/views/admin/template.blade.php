<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link href="{{url('backend/img/Logo_Kemnaker.png')}}" rel="icon">
  <title>@yield('title')</title>
  <link href="{{url('backend/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
  <link href="{{url('backend/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
  <link href="{{url('backend/css/ruang-admin.min.css')}}" rel="stylesheet">
  <link href="{{url('backend/vendor/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet">
</head>

<body id="page-top">
  <div id="wrapper">
          <!-- Sidebar -->
          <ul class="navbar-nav sidebar sidebar-light accordion" id="accordionSidebar">
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{url('/admin/dashboard')}}">
              <div class="sidebar-brand-icon">
                <img src="{{url('backend/img/Logo_Kemnaker.png')}}">
              </div>
              <div class="sidebar-brand-text mx-3"> <b>DISNAKER</b></div>
            </a>
            <hr class="sidebar-divider my-0">
            <li class="nav-item active">
              <a class="nav-link" href="{{url('/admin/dashboard')}}">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Dashboard</span></a>
            </li>
            <hr class="sidebar-divider">
            <div class="sidebar-heading">
              Manajemen
            </div>
            @if (auth()->guard('admin')->user()->level === 'AdminSuper')
            <li class="nav-item">
              <a class="nav-link" href="{{url('manajemen/admin')}}">
                <i class="fab fa-fw fa-wpforms"></i>
                <span>Admin</span>
              </a>
            </li>
            @endif
           

            <li class="nav-item">
              <a class="nav-link" href="{{url('admin/employee')}}">
                <i class="fab fa-fw fa-wpforms"></i>
                <span>Data Pegawai</span>
              </a>
            </li>
            
            <li class="nav-item">
              <a class="nav-link" href="{{url('admin/cource')}}">
                <i class="fab fa-fw fa-wpforms"></i>
                <span>Skema-Pelatihan</span>
              </a>
            </li>

            <li class="nav-item">
              <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseBootstrap"
                aria-expanded="true" aria-controls="collapseBootstrap">
                <i class="far fa-fw fa-window-maximize"></i>
                <span>K Kuning & Pendaftaran</span>
              </a>
              <div id="collapseBootstrap" class="collapse" aria-labelledby="headingBootstrap" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                  <h6 class="collapse-header">Validasi</h6>
                  <a class="collapse-item" href="{{url('validasi/card')}}">Kartu Kuning</a>
                  <a class="collapse-item" href="{{url('validasi/registration')}}">Pendaftaran Pelatihan</a>
                </div>
              </div>
            </li>
            
            <hr class="sidebar-divider">
            
            
          </ul>
          <!-- Sidebar --> 

          <!-- TopBar -->
     <div id="content-wrapper" class="d-flex flex-column">
      <div id="content">
        <nav class="navbar navbar-expand navbar-light bg-navbar topbar mb-4 static-top">
        <button id="sidebarToggleTop" class="btn btn-link rounded-circle mr-3">
          <i class="fa fa-bars"></i>
        </button>
        <ul class="navbar-nav ml-auto">
          <li class="nav-item dropdown no-arrow">
            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown"
              aria-haspopup="true" aria-expanded="false">
              <div class="topbar-divider d-none d-sm-block"></div>
          <span class="ml-2 d-none d-lg-inline text-white small">{{auth()->guard('admin')->user()->nama}}</span>
            </a>
            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
              <a class="dropdown-item" href="{{url('profile/admin')}}">
                <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                Profile
              </a>
              <form action="login" method="post">
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="{{url('admin/logout')}}">
                <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                Logout
              </a>
            </div>
          </li>
        </ul>
      </nav>
      <!-- Topbar -->
    </form>

        @yield('content')

      
    </div>
      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>copyright &copy; <script> document.write(new Date().getFullYear()); </script> - 
              <b>DISNAKER</b>
            </span>
          </div>
        </div>
      </footer>
      <!-- Footer -->
    </div>
  </div>

  <!-- Scroll to top -->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <script src="{{url('backend/vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{url('backend/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{url('backend/vendor/jquery-easing/jquery.easing.min.js')}}"></script>
  <script src="{{url('backend/js/ruang-admin.min.js')}}"></script>
  <script src="{{url('backend/vendor/chart.js/Chart.min.js')}}"></script>
  <script src="{{url('backend/js/demo/chart-area-demo.js')}}"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-show-password/1.0.3/bootstrap-show-password.min.js"></script>
  <script src="{{url('backend/vendor/datatables/jquery.dataTables.min.js')}}"></script>
  <script src="{{url('backend/vendor/datatables/dataTables.bootstrap4.min.js')}}"></script> 
  <script>
    $(document).ready(function () {
      $('#dataTable').DataTable(); // ID From dataTable 
      $('#dataTableHover').DataTable(); // ID From dataTable with Hover
    });
  </script>  
 <script type="text/javascript">
  @if (count($errors) > 0)
         $('#tambah').modal('show');
         $('#edit-data').modal('show');
  @endif
</script>
  
  <!-- Page level plugins -->
  <script src="{{url('backend/vendor/chart.js/Chart.min.js')}}"></script>
  <!-- Page level custom scripts -->
  <script src="{{url('backend/js/demo/chart-bar-demo.js')}}"></script>
</body>

</html>