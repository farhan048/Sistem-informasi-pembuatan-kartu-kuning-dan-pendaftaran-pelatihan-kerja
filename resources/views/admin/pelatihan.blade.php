@extends('admin.template')
@section('title', 'Skema Pelatihan')
@section('content')



    <!-- DataTable with Hover -->
    <div class="container-fluid" id="container-wrapper">
      <div class="d-sm-flex align-items-center justify-content-between mb-4">
      <h1 class="h3 mb-0 text-gray-800">Data Skema Pelatihan</h1>
      <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{url('/admin/dashboard')}}">Home</a></li>
          <li class="breadcrumb-item active" aria-current="page">Data Skema Pelatihan</li>
      </ol>
      </div>




    <div class="col-lg-12">
        <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                </div>
                <div class="card-body">
                  <div class="alert alert-success" role="alert">
                    <h4 class="alert-heading"><strong>Catatan !</strong></h4>
                      <li>Jika ingin menambahkan tahun Gunakan _tahun contoh : Disnaker_2020</li>
                      <li>Jika ingin Mengganti <strong>Skema PELATIHAN</strong> silakan edit </li>
                  </div>
                </div>
         <!-- Modal tambah -->
          <div class="container mt-1">
              <button type="button" class="btn btn-primary btn-icon-split" data-toggle="modal" data-target="#tambah">
                <span class="icon text-white-50">
                  <i class="fas fa-plus"></i>
                </span>
                <span class="text">Tambah Pelatihan</span>
              </button>
            </div>
    
          

            <div class="modal fade" id="tambah" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tambah Data Pelatihan</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                      <form method="post" action="/admin/cource">
                          <div class="modal-body">
                                @csrf
                            <div class="form-group">
                                <label for="pelatihan">Pelatihan</label>
                                <input type="text" class="form-control  @error('pelatihan') is-invalid @enderror" value="{{ old('pelatihan') }}" id="pelatihan" name="pelatihan"placeholder="Masukan Pelatihan">
                                @error('pelatihan')
                                  <div class="invalid-feedback">{{ $message }}</div>
                              @enderror
                            </div>
                      </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="sumbit" class="btn btn-primary">Tambah</button>
                  </div>
                  </form>
                </div>
              </div>
            </div>
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
                  <th scope="col">No</th>
                  <th scope="col">Pelatihan</th>
                  <th scope="col">Aksi</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($pelatihan as $data)
                <tr>
                  <th scope="row">{{$loop->iteration}}</th>
                  <td>{{$data->pelatihan}}</td>
                  <td>
            
                               <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#edit-data{{$data->id}}">
                                <i class="fas fa-user-edit"></i>
                                </button>
            
                             <form action="/admin/cource/{{ $data->id }}"  method="post" class="d-inline">
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
            
              @foreach ($pelatihan as $data)
            <!-- Modal edit -->
            <div class="modal fade" id="edit-data{{$data->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ubah Pelatihan</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                      <form method="post" action="/admin/cource/{{ $data->id }}" enctype="multipart/form-data">
                            @method('patch')
                                @csrf
                          <div class="modal-body">
                            <div class="form-group">
                                <label for="pelatihan">Pelatihan</label>
                                <input type="text" class="form-control  @error('pelatihan') is-invalid @enderror" value="{{ $data->pelatihan }}" id="pelatihan" name="pelatihan">
                                @error('pelatihan')
                                  <div class="invalid-feedback">{{ $message }}</div>
                              @enderror
                            </div>
                      </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="sumbit" class="btn btn-success">Simpan</button>
                  </div>
                  </form>
                </div>
              </div>
            </div>
            <br>
            @endforeach
    </div>
    </div>

@endsection