@extends('admin.template')
@section('title', 'Admin')
@section('content')



    <!-- DataTable with Hover -->
    <div class="container-fluid" id="container-wrapper">
      <div class="d-sm-flex align-items-center justify-content-between mb-4">
      <h1 class="h3 mb-0 text-gray-800">Data Admin</h1>
      <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{url('/admin/dashboard')}}">Home</a></li>
          <li class="breadcrumb-item active" aria-current="page">Data Admin</li>
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
                <span class="text">Tambah Admin</span>
              </button>
            </div>
    
          

            <div class="modal fade" id="tambah" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tambah Data Admin</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                      <form method="post" action="">
                          <div class="modal-body">
                                @csrf
                            <div class="form-group">
                                <label for="username">Masukan Username</label>
                                <input type="text" class="form-control @error('username') is-invalid @enderror" value="{{ old('username') }}" id="username" name="username" placeholder="Masukan username">
                                @error('username')
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
                                <label for="level">Level</label>
                                <input type="text" class="form-control  @error('level') is-invalid @enderror" value="Admin" id="level" name="level" readonly>
                                @error('level')
                                  <div class="invalid-feedback">{{ $message }}</div>
                              @enderror
                            </div>
                            <div class="form-group">
                                <label for="password">Masukan Password</label>
                                <input type="text" class="form-control  @error('password') is-invalid @enderror" value="{{ old('password') }}"id="password" name="password" placeholder="masukan password">
                                @error('password')
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
                  <th scope="col">Nama</th>
                  <th scope="col">Username</th>
                  <th scope="col">Level</th>
                  <th scope="col">Aksi</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($admins as $admin)
                <tr>
                  <th scope="row">{{$loop->iteration}}</th>
                  <td>{{$admin->nama}}</td>
                  <td>{{$admin->username}}</td>
                  <td>{{$admin->level}}</td>
                  <td>
            
                               <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#edit-data{{$admin->id}}">
                                <i class="fas fa-user-edit"></i>
                                </button>
            
                             <form action=" /manajemen/admin/{{ $admin->id }}" method="post" class="d-inline">
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
            
            @foreach ($admins as $admin)
            <!-- Modal edit -->
            <div class="modal fade" id="edit-data{{$admin->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ubah Data Admin</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                      <form method="post" action="/manajemen/admin/{{ $admin->id }}">
                            @method('patch')
                                @csrf
                          <div class="modal-body">
                            <div class="form-group">
                                <label for="username">Masukan Username</label>
                                <input type="text" class="form-control @error('username') is-invalid @enderror" value="{{ $admin->username }}" id="username" name="username" placeholder="Masukan username">
                                @error('username')
                                  <div class="invalid-feedback">{{ $message }}</div>
                              @enderror
                            </div>
                            <div class="form-group">
                                <label for="nama">Nama</label>
                                <input type="text" class="form-control  @error('nama') is-invalid @enderror" value="{{ $admin->nama }}" id="nama" name="nama"placeholder="Masukan Nama">
                                @error('nama')
                                  <div class="invalid-feedback">{{ $message }}</div>
                              @enderror
                            </div>
                            <div class="form-group">
                                <label for="password">Masukan Password</label>
                                <input type="text" class="form-control  @error('password') is-invalid @enderror"  id="password" name="password" placeholder="masukan password">
                                @error('password')
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