<!doctype html>
<html lang="en">

  <head>
    <link href="{{url('assets/images/Logo_Kemnaker.png')}}" rel="icon">
    <title>@yield('title') | DISNAKER</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=DM+Sans:300,400,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{url('assets/fonts/icomoon/style.css')}}">
    <link href="{{url('assets/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="{{url('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{url('assets/css/animate.min.css')}}">
    <link rel="stylesheet" href="{{url('assets/css/jquery.fancybox.min.css')}}">
    <link rel="stylesheet" href="{{url('assets/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{url('assets/css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{url('assets/fonts/flaticon/font/flaticon.css')}}">
    <link rel="stylesheet" href="{{url('assets/css/aos.css')}}">

    <!-- MAIN CSS -->
    <link rel="stylesheet" href="{{url('assets/css/style.css')}}">

  </head>

  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

    
    <div class="site-wrap" id="home-section">

      <div class="site-mobile-menu site-navbar-target">
        <div class="site-mobile-menu-header">
          <div class="site-mobile-menu-close mt-3">
            <span class="icon-close2 js-menu-toggle"></span>
          </div>
        </div>
        <div class="site-mobile-menu-body"></div>
      </div>



      <header class="site-navbar site-navbar-target" role="banner">

        <div class="container">
          <div class="row align-items-center position-relative">

            <div class="col-lg-4">
              <nav class="site-navigation text-right ml-auto " role="navigation">
                <ul class="site-menu main-menu js-clone-nav ml-auto d-none d-lg-block">
                  <li class="active"><a href="{{url('/')}}" class="nav-link">Home</a></li>
                  <li><a href="{{url('/profile')}}" class="nav-link">Profil</a></li>
                  
                </ul>
              </nav>
            </div>
            <div class="col-lg-4 text-center">
              <div class="site-logo">
                <a href="{{url('/')}}">DISNAKER</a>
              </div>


              <div class="ml-auto toggle-button d-inline-block d-lg-none"><a href="#" class="site-menu-toggle py-5 js-menu-toggle text-white"><span class="icon-menu h3 text-white"></span></a></div>
            </div>
            <div class="col-lg-4">
              <nav class="site-navigation text-left mr-auto " role="navigation">
                <ul class="site-menu main-menu js-clone-nav ml-auto d-none d-lg-block">
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Layanan</a>
                    <div class="dropdown-menu bg-transparent">
                      <a class="dropdown-item" href="{{url('layanan/kartu-kuning')}}">Pendaftaran Kartu Kuning</a>
                      <a class="dropdown-item" href="{{url('layanan/pelatihan')}}">Pendaftaran Pelatihan Kerja</a>
                    </div>
                  </li>
                  <li><a href="{{url('/tentang')}}" class="nav-link">Tentang Kami</a></li>
                </ul>
              </nav>
            </div>
            

          </div>
        </div>

      </header>

    
    
    
      <div class="owl-carousel owl-1">
        <div class="ftco-blocks-cover-1">
          <div class="ftco-cover-1" style="background-image: url('/assets/images/1.jpg');">
            <div class="container">
              <div class="row align-items-center justify-content-center">
                <div class="col-lg-6 text-center">
                  <h1>Selamat Datang</h1>
                  <p>Dinas Tenaga Kerja dan Transmigrasi Kabupaten Kuningan</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="ftco-blocks-cover-1">
          <div class="ftco-cover-1" style="background-image: url('/assets/images/hero_2.jpg');">
            <div class="container">
              <div class="row align-items-center justify-content-center">
                <div class="col-lg-6 text-center">
                  <h1>Selamat Datang</h1>
                  <p>Dinas Tenaga Kerja dan Transmigrasi Kabupaten Kuningan</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="ftco-blocks-cover-1">
          <div class="ftco-cover-1" style="background-image: url('/assets/images/3.jpg');">
            <div class="container">
              <div class="row align-items-center justify-content-center">
                <div class="col-lg-6 text-center">
                  <h1>Selamat Datang</h1>
                  <p>Dinas Tenaga Kerja dan Transmigrasi Kabupaten Kuningan</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
   
      @yield('content')
    
      <footer class="site-footer">
        <div class="container">
          <div class="row">
            <div class="col-md-6">
              <div class="row">
                <div class="col-md-7">
                  <h2 class="footer-heading mb-4">TENTANG KAMI</h2>
                  <p>Situs Resmi DISNAKER KAB. KUNINGAN adalah Situs yang dimiliki oleh Disnakertrans Kabupaten Kuningan</p>

                </div>
                <div class="col-md-4 ml-auto">
                  <h2 class="footer-heading mb-4">Links</h2>
                  <ul class="list-unstyled">
                    <li><a href="{{url('/')}}">Home</a></li>
                    <li><a href="{{url('/profile')}}">Profil</a></li>
                    <li><a href="{{url('/tentang')}}">Tentang Kami</a></li>
                    <li><a href="{{url('/faq')}}">FAQ</a></li>
                  </ul>
                </div>

              </div>
            </div>
          
            <div class="col-md-4 ml-auto">
              <h2 class="foot er-heading mb-4">Hubungi Kami</h2>
              <p>Dinas Tenaga Kerja dan Transmigrasi Kabupaten Kuningan</p>
              <p>Jalan RE. Martadinata KM.6 Po Kertawangunan, Sindangagung, Kabupaten Kuningan, Jawa Barat</p>
              <p> Kode Pos : 45513 </p>
              <p> Telp/Fax : (0232)-871661</p>
              <p><i class="fas fa-envelope-open"></i> info@disnakertrans.kuningankab.go.id</p>
  
              </div>
            </div>
          
          <div class="row pt-5 mt-5 text-center">
            <div class="col-md-12">
              <div class="border-top pt-5">
                <p>
                  <span>copyright &copy; <script> document.write(new Date().getFullYear()); </script> - 
                    <b>DISNAKER</b>
                  </span>
              </p>
              </div>
            </div>

          </div>
        </div>
      </footer>

    </div>

    <script src="{{url('assets/js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{url('assets/js/popper.min.js')}}"></script>
    <script src="{{url('assets/js/bootstrap.min.js')}}"></script>
    <script src="{{url('assets/js/owl.carousel.min.js')}}"></script>
    <script src="{{url('assets/js/jquery.sticky.js')}}"></script>
    <script src="{{url('assets/js/jquery.waypoints.min.js')}}"></script>
    <script src="{{url('assets/js/jquery.animateNumber.min.js')}}"></script>
    <script src="{{url('assets/js/jquery.fancybox.min.js')}}"></script>
    <script src="{{url('assets/js/jquery.easing.1.3.js')}}"></script>
    <script src="{{url('assets/js/aos.js')}}"></script>

    <script src="{{url('assets/js/main.js')}}"></script>

  </body>

</html>
