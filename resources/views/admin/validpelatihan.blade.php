@extends('admin.template')
@section('title', 'Validasi Peserta Pelatihan')
@section('content')



    <!-- DataTable with Hover -->
    <div class="container-fluid" id="container-wrapper">
      <div class="d-sm-flex align-items-center justify-content-between mb-4">
      <h1 class="h3 mb-0 text-gray-800">Data Peserta Pelatihan</h1>
      <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{url('/admin/dashboard')}}">Home</a></li>
          <li class="breadcrumb-item active" aria-current="page">Data Peserta Pelatihan</li>
      </ol>
      </div>



    <div class="col-lg-12">
        <div class="card mb-4">
         
         <!-- Modal tambah -->
    
         <br>
    @if (session('status'))

    <div class="alert alert-success alert-dismissible" role="alert">
      {{ session('status') }}
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
  </div>
    @endif
          <div class="table-responsive p-3">
            <table class="table align-items-center table-flush table-hover" id="dataTableHover">
              <thead class="thead-light">
                <tr>
                  <th>No</th>
                  <th>Nik</th>
                  <th>Nama</th>
                  <th>Dokumen</th>
                  <th>Status</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($pendaftaran as $data)
                <tr>
                <th scope="row">{{$loop->iteration}}</th>
                <td>{{$data->nik}}</td>
                <td>{{$data->nama}}</td>
                <td> <button type="button" class="btn btn-info" data-toggle="modal" data-target="#dokumen-data{{$data->id}}">
                  <i class="far fa-eye"></i>
                  </button>
                </td>
          
                <td>
                  @if ($data->status == 'Diterima')
                      <span class="badge badge-success">{{$data->status}}</span>
                    @elseif($data->status == 'Ditolak')
                    <span class="badge badge-danger">{{$data->status}}</span>
                    @elseif($data->status == 'Pending')
                    <span class="badge badge-warning">{{$data->status}}</span>
                    @else
                    <span class="badge badge-warning">Belum Diverifikasi</span>
                  @endif
                </td>
                  <td>
                    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#detail-data{{$data->id}}">
                      <i class="far fa-eye"></i>
                      </button>
                      
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#edit-data{{$data->id}}">
                      <i class="fas fa-user-edit"></i>
                     </button>
 
                  <form action=" /validasi/card/{{$data->id}}" method="post" class="d-inline">
                       @method('delete')
                       @csrf
                       <button type="submit" class="btn btn-danger"><i class="fas fa-trash"></i></button>
                   </form>
                  </td>
                </tr>                 
               @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    <!--Row-->
  </div>
  
  @foreach ($pendaftaran as $data)
    <!--modal Detail-->
    <div class="modal fade" id="detail-data{{$data->id}}" tabindex="-1" role="dialog"
      aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalScrollableTitle">Detail Pendaftaran</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
        <div class="card">
          <ul class="list-group list-group-flush">
            <li class="list-group-item">{{$data->nik}}</li>
            <li class="list-group-item">{{$data->nama}}</li>
            <li class="list-group-item">{{$data->tempat}}, {{date('d-m-Y', strtotime($data->tanggal))}}</li>
            <li class="list-group-item">{{$data->alamat}}</li>
            <li class="list-group-item">{{$data->jenis_kelamin}}</li>
            <li class="list-group-item">{{$data->agama}}</li>
            <li class="list-group-item">{{$data->umur}} Tahun</li>
            <li class="list-group-item">{{$data->pendidikan}} - {{$data->jurusan}} - {{$data->tahun}}</li>
            <li class="list-group-item">{{$data->no_ponsel}}</li>
            <li class="list-group-item">Skema : {{$data->skema}}</li>
          </ul>
        </div>
      </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>

  <!--modal dokumen -->
  <div class="modal fade" id="dokumen-data{{$data->id}}" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
            <div class="modal-dialog  modal-dialog-centered modal-dialog-scrollable" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalScrollableTitle">Dokumen Administrasi</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <img src="{{ asset($data->ktp)  }}" class="card-img-top">
                  <hr>
                  <img src="{{ asset($data->foto)  }}" class="card-img-top">
                  <hr>
                  <img src="{{ asset($data->ijazah)  }}" class="card-img-top">
                  <hr>
                  <img src="{{ asset($data->skck)  }}" class="card-img-top">
                  <hr>
                  <img src="{{ asset($data->surat_dokter)  }}" class="card-img-top">
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
          </div>


     <!-- Modal edit -->
      <div class="modal fade" id="edit-data{{$data->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Status Pengajuan</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form method="POST" action=" /validasi/registration/{{$data->id}}">
        @method('patch')
      <div class="modal-body">
        @csrf
        
        <div class="form-group">
          <label for="inputState">Status Pengajuan</label>
          <select id="inputState" class="form-control @error('status') is-invalid @enderror"   name="status">
            <option selected value="">{{$data->status }}</option> 
          <option value="Diterima">Diterima</option>
          <option value="Ditolak">Ditolak</option>
          </select>
          @error('status')
            <div class="invalid-feedback">{{ $message }}</div>
          @enderror
        </div>
     

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-success">Update</button>
      </div>
    </div>
  </div>
</form>
</div>
@endforeach



@endsection