@extends('admin.template')
@section('title', 'Data Pegawai')
@section('content')



    <!-- DataTable with Hover -->
    <div class="container-fluid" id="container-wrapper">
      <div class="d-sm-flex align-items-center justify-content-between mb-4">
      <h1 class="h3 mb-0 text-gray-800">Data Pegawai</h1>
      <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{url('/admin/dashboard')}}">Home</a></li>
          <li class="breadcrumb-item active" aria-current="page">Data Pegawai</li>
      </ol>
      </div>



    <div class="col-lg-12">
        <div class="card mb-4">
         
         <!-- Modal tambah -->
          <div class="container mt-5">
              <button type="button" class="btn btn-primary btn-icon-split" data-toggle="modal" data-target="#tambah"
                id="#myBtn">
                <span class="icon text-white-50">
                  <i class="fas fa-plus"></i>
                </span>
                <span class="text">Tambah Pegawai</span>
              </button>
            </div>
    
          <div class="modal fade" id="tambah" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
          aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Data Pegawai</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <form method="post" action="" enctype="multipart/form-data">
                @csrf
              <div class="modal-body">
                <div class="form-group">
                  <label for="nip">Nip</label>
                  <input type="text" class="form-control @error('nip') is-invalid @enderror" value="{{ old('nip') }}" id="nip" name="nip" placeholder="Masukan Nip">
                  @error('nip')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
              </div>

              <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" class="form-control  @error('nama') is-invalid @enderror" value="{{ old('nama') }}" id="nama" name="nama"placeholder="Masukan Nama">
                @error('nama')
                  <div class="invalid-feedback">{{ $message }}</div>
              @enderror
            </div>

              <div class="form-group">
                <label for="alamat">Alamat</label>
                <input type="text" class="form-control  @error('alamat') is-invalid @enderror" value="{{ old('alamat') }}" id="alamat" name="alamat"placeholder="Masukan alamat">
                @error('alamat')
                  <div class="invalid-feedback">{{ $message }}</div>
              @enderror
            </div>

              <div class="form-group">
                <label for="golongan">Golongan</label>
                <input type="text" class="form-control  @error('golongan') is-invalid @enderror" value="{{ old('golongan') }}" id="golongan" name="golongan"placeholder="Masukan golongan">
                @error('golongan')
                  <div class="invalid-feedback">{{ $message }}</div>
              @enderror
            </div>

           
              <div class="form-group">
                <label for="jabatan">Jabatan</label>
                <input type="text" class="form-control  @error('jabatan') is-invalid @enderror" value="{{ old('jabatan') }}" id="jabatan" name="jabatan"placeholder="Masukan Jabatan">
                @error('jabatan')
                  <div class="invalid-feedback">{{ $message }}</div>
              @enderror
            </div>

              <div class="form-group">
                <label for="email">Email</label>
                <input type="text" class="form-control  @error('email') is-invalid @enderror" value="{{ old('email') }}" id="email" name="email"placeholder="Masukan email">
                @error('email')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
              </div>
           
            <div class="form-group">
              <label for="no_ponsel">No Telepon</label>
              <input type="text" class="form-control  @error('no_ponsel') is-invalid @enderror" value="{{ old('no_ponsel') }}" id="no_ponsel" name="no_ponsel"placeholder="Masukan No Telepon">
              @error('no_ponsel')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
          </div>
          
            <div class="form-group">
                <label for="foto">Foto</label>
                <input type="file" class="form-control-file  @error('foto') is-invalid @enderror" value="{{ old('foto') }}"id="foto" name="foto" placeholder="masukan Foto">
                @error('foto')
                  <div class="invalid-feedback">{{ $message }}</div>
              @enderror
            </div>


              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-success">Tambah</button>
              </div>
            </div>
          </div>
        </form>
        </div>
        <br>
    <!-- Modal tambah -->
    <br>
    <div class="container">
      @if (session('status'))
      <div class="alert alert-success alert-dismissible" role="alert">
        {{ session('status') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
    </div>
      @endif
    </div>
          <div class="table-responsive p-3">
            <table class="table align-items-center table-flush table-hover" id="dataTableHover">
              <thead class="thead-light">
                <tr>
                  <th>No</th>
                  <th>Nama</th>
                  <th>Nip</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($pegawai as $data)
                <tr>
                 <th scope="row">{{$loop->iteration}}</th>
                 <td>{{$data->nama}}</td>
                 <td>{{$data->nip}}</td>                
                  <td>
                  <button type="button" class="btn btn-success" data-toggle="modal" data-target="#detail-data{{$data->id}}">
                        <i class="far fa-eye"></i>
                        </button>
                        
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#edit-data{{$data->id}}">
                      <i class="fas fa-user-edit"></i>
                     </button>
 
                  <form action=" /admin/employee/{{$data->id}}" method="POST" class="d-inline">
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
  @foreach ($pegawai as $data)
  <!--modal Detail-->
  <div class="modal fade" id="detail-data{{$data->id}}" tabindex="-1" role="dialog"
    aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalScrollableTitle">Detail Pegawai</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
        <div class="card">
          <ul class="list-group list-group-flush">
            <li class="list-group-item">{{$data->nip}}</li>
            <li class="list-group-item">{{$data->nama}}</li>
            <li class="list-group-item">{{$data->alamat}}</li>
            <li class="list-group-item">{{$data->golongan}}</li>
            <li class="list-group-item">{{$data->jabatan}}</li>
            <li class="list-group-item">{{$data->no_ponsel}}</li>
          </ul>
          <br>
          
          <img src="{{ asset($data->foto)  }}" class="card-img-top">
        </div>
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
        <h5 class="modal-title" id="exampleModalLabel">Edit Data Karyawan</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form method="post" action="/admin/employee/{{$data->id}}" enctype="multipart/form-data">
        @method('PATCH')
        @csrf
      <div class="modal-body">
        <div class="form-group">
          <label for="nip">Nip</label>
          <input type="text" class="form-control @error('nip') is-invalid @enderror" value="{{$data->nip}}" id="nip" name="nip" placeholder="Masukan Nip">
          @error('nip')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
      </div>

      <div class="form-group">
        <label for="nama">Nama</label>
        <input type="text" class="form-control  @error('nama') is-invalid @enderror" value="{{$data->nama}}" id="nama" name="nama"placeholder="Masukan Nama">
        @error('nama')
          <div class="invalid-feedback">{{ $message }}</div>
      @enderror
    </div>

      <div class="form-group">
        <label for="alamat">Alamat</label>
        <input type="text" class="form-control  @error('alamat') is-invalid @enderror" value="{{$data->alamat}}" id="alamat" name="alamat"placeholder="Masukan alamat">
        @error('alamat')
          <div class="invalid-feedback">{{ $message }}</div>
      @enderror
    </div>

      <div class="form-group">
        <label for="golongan">Golongan</label>
        <input type="text" class="form-control  @error('golongan') is-invalid @enderror" value="{{$data->golongan}}" id="golongan" name="golongan"placeholder="Masukan golongan">
        @error('golongan')
          <div class="invalid-feedback">{{ $message }}</div>
      @enderror
    </div>

   
      <div class="form-group">
        <label for="jabatan">Jabatan</label>
        <input type="text" class="form-control  @error('jabatan') is-invalid @enderror" value="{{$data->jabatan}}" id="jabatan" name="jabatan"placeholder="Masukan Jabatan">
        @error('jabatan')
          <div class="invalid-feedback">{{ $message }}</div>
      @enderror
    </div>

      <div class="form-group">
        <label for="email">Email</label>
        <input type="text" class="form-control  @error('email') is-invalid @enderror" value="{{$data->email}}" id="email" name="email"placeholder="Masukan email">
        @error('email')
        <div class="invalid-feedback">{{ $message }}</div>
        @enderror
      </div>
   
    <div class="form-group">
      <label for="no_ponsel">No Telepon</label>
      <input type="text" class="form-control  @error('no_ponsel') is-invalid @enderror" value="{{$data->no_ponsel}}" id="no_ponsel" name="no_ponsel"placeholder="Masukan No Telepon">
      @error('no_ponsel')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
  </div>
  
    <div class="form-group">
        <label for="foto">Foto</label>
        <input type="file" class="form-control-file  @error('foto') is-invalid @enderror" value="{{ old('foto') }}"id="foto" name="foto" placeholder="masukan Foto">
        @error('foto')
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
<!-- Modal Edit -->


@endforeach
@endsection