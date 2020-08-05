@extends('admin.template')

@section('title', 'Profile')
    

@section('content')
<div class="container">
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
  
  <br>
    <ul class="list-group list-group-flush">
      <h5 class="mb-1">Username</h5>
      <li class="list-group-item">{{$user->username}}</li>
      <h5 class="mb-1">Nama </h5>
      <li class="list-group-item">{{$user->nama}}</li>
      <h5 class="mb-1">Level</h5>
    <li class="list-group-item">{{$user->level}}</li>
   
      </ul>

      <br>
      <a class="btn btn-success float-right" href="{{url('admin/dashboard')}}" role="button"><i class="fas fa-arrow-left"></i><span> kembali</span></a>
      <button type="button" class="btn btn-primary float-right mr-3" data-toggle="modal" data-target="#edit-data{{$user->id}}">
        <i class="fas fa-user-edit"></i>
       </button>
    </div>
      <div class="modal fade" id="edit-data{{$user->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Ubah Akun</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
          
          <form method="post" action="{{url ('/profile/adminPost')}}">
                     
                          @csrf
                    <div class="modal-body">
                      <div class="form-group">
                          <label for="username">Masukan Username</label>
                          <input type="text" class="form-control @error('username') is-invalid @enderror" value="{{ $user->username }}" id="username" name="username" placeholder="Masukan username">
                          @error('username')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                      </div>
                      <div class="form-group">
                          <label for="nama">Nama</label>
                          <input type="text" class="form-control  @error('nama') is-invalid @enderror" value="{{ $user->nama }}" id="nama" name="nama"placeholder="Masukan Nama">
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
</div>

@endsection
    
   