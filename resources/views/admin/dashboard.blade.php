@extends('admin.template')

@section('title', 'Dashboard')
    

@section('content')
<!-- Container Fluid-->
<div class="container-fluid" id="container-wrapper">
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="{{url('/admin/dashboard')}}">Home</a></li>
      <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
    </ol>
  </div>
  
  @if (session('status'))
  <div class="alert alert-success alert-dismissible" role="alert">
    {{ session('status') }} , {{auth()->guard('admin')->user()->nama}}
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
</div>
  @endif

  <div class="row mb-3">
 
    
    <!-- New User Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card h-100">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-uppercase mb-1">Jumlah Data Karyawan</div>
              <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">{{$karyawan}} Orang</div>
            </div>
            <div class="col-auto">
              <i class="fas fa-users fa-2x text-black"></i>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Pending Requests Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card h-100">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-uppercase mb-1">Pengajuan Kartu Kuning</div>
              <div class="h5 mb-0 font-weight-bold text-gray-800">{{$kartu}}</div>
            </div>
            <div class="col-auto">
              <i class="fas fa-file-contract fa-3x text-warning"></i>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Pending Requests Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card h-100">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-uppercase mb-1">Kartu Yang Diterbitkan</div>
              <div class="h5 mb-0 font-weight-bold text-gray-800">{{$kartuberhasil}}</div>
            </div>
            <div class="col-auto">
              <i class="fas fa-file-contract fa-3x text-success"></i>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card h-100">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-uppercase mb-1">Pengajuan Pelatihan</div>
              <div class="h5 mb-0 font-weight-bold text-gray-800">{{$pelatihan}} Orang</div>
            </div>
            <div class="col-auto">
              <i class="fas fa-file-contract fa-3x text-primary "></i>
            </div>
          </div>
        </div>
      </div>
    </div>

  
  </div>
  <!--Row-->
</div>
<!---Container Fluid-->
@endsection
    
   