@extends('main')
@section('title', 'Formulir Kartu Kuning')
@section('content')



<div class="bg-white">
  <br>
<form action="/validasi/card" method="POST" enctype="multipart/form-data">
  @csrf
  <div class="container" >
    <div class="container">
      @if (session('status'))

      <div class="alert alert-success alert-dismissible" role="alert">
        {{ session('status') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      @endif
      <br>
    </div>
    <h5>Formulir Pendaftaran</h5>
            <div class="form-group">
                <label for="nik">Nik</label>
                <input type="text" class="form-control @error('nik') is-invalid @enderror" value="{{ old('nik') }}" id="nik" name="nik" placeholder="Nik Lengkap">
                @error('nik')
                  <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" class="form-control @error('nama') is-invalid @enderror" value="{{ old('nama') }}" id="nama" name="nama" placeholder="Nama Lengkap">
                @error('nama')
                <div class="invalid-feedback">{{ $message }}</div>
              @enderror
            </div>

            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="tempat">Tempat Tanggal Lahir</label>
                <input type="text" class="form-control @error('tempat') is-invalid @enderror" value="{{ old('tempat') }}" id="tempat" name="tempat" placeholder="Tempat lahir">
                @error('tempat')
                  <div class="invalid-feedback">{{ $message }}</div>
                @enderror
              </div>
            
              <div class="form-group col-md-6">
                  <label for="tanggal">Tanggal</label>
                  <input type="date" class="form-control @error('tanggal') is-invalid @enderror" value="{{ old('tanggal') }}" id="tanggal"  name="tanggal" placeholder="Masukan Tanggal">
                  @error('tanggal')
                  <div class="invalid-feedback">{{ $message }}</div>
                @enderror
              </div>
          </div>
          
              <div class="form-group">
                <label for="alamat">Alamat</label>
                <textarea type="text" class="form-control  @error('alamat') is-invalid @enderror" value="{{ old('alamat') }}"  name="alamat"  id="alamat" placeholder="Masukan Alamat Lengkap"></textarea>  
                @error('alamat')
                  <div class="invalid-feedback">{{ $message }}</div>
                @enderror
              </div>
            
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="inputState">Jenis Kelamin</label>
                <select id="inputState" class="form-control @error('jenis_kelamin') is-invalid @enderror" value="{{ old('jenis_kelamin') }}"  name="jenis_kelamin">
                  <option selected value="">Pilih...</option> 
                <option value="Laki-Laki">Laki-Laki</option>
                <option value="Perempuan">Perempuan</option>
                </select>
                @error('jenis_kelamin')
                  <div class="invalid-feedback">{{ $message }}</div>
                @enderror
              </div>
              <div class="form-group col-md-6">
                <label for="inputState">Agama</label>
                <select id="inputState" class="form-control @error('agama') is-invalid @enderror" value="{{ old('agama') }}"  name="agama">
                  <option selected value="">Pilih...</option>
                <option value="Islam">Islam</option>
                <option value="Kristen Protestan">Kristen Protestan</option>
                <option value="Katolik">Katolik</option>
                <option value="Hindu">Hindu</option>
                <option value="Buddha">Buddha</option>
              </select>
                @error('agama')
                  <div class="invalid-feedback">{{ $message }}</div>
                @enderror
              </div>
          </div>
          
            <div class="form-row">
                <div class="form-group col-md-6">
            <label for="no_ponsel">No ponsel ( WhatsApp)</label>
            <input type="text" class="form-control @error('no_ponsel') is-invalid @enderror" value="{{ old('no_ponsel') }}" id="no_ponsel"  name="no_ponsel" placeholder=" Masukan No ponsel ( WhatsApp)">
            @error('no_ponsel')
                  <div class="invalid-feedback">{{ $message }}</div>
                @enderror
        </div>
            
            <div class="form-group col-md-6">
                <label for="umur">umur</label>
                <input type="text" class="form-control @error('umur') is-invalid @enderror" value="{{ old('umur') }}" id="umur"  name="umur" placeholder="Masukan Umur">
                @error('umur')
                  <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
          </div>
            <div class="form-row">
              <div class="form-group col-md-4">
                <label for="pendidikan">pendidikan</label>
                <input type="text" class="form-control @error('pendidikan') is-invalid @enderror" value="{{ old('pendidikan') }}" id="pendidikan"  name="pendidikan" placeholder="Masukan pendidikan Terakhir">
                @error('pendidikan')
                  <div class="invalid-feedback">{{ $message }}</div>
                @enderror
              </div>
            
            <div class="form-group col-md-4">
                <label for="jurusan">Jurusan</label>
                <input type="text" class="form-control @error('jurusan') is-invalid @enderror" value="{{ old('jurusan') }}" id="jurusan"  name="jurusan" placeholder="Masukan Jurusan">
                @error('jurusan')
                  <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            
            <div class="form-group col-md-4">
                <label for="tahun">Tahun</label>
                <input type="text" class="form-control @error('tahun') is-invalid @enderror" value="{{ old('tahun') }}" id="tahun"  name="tahun" placeholder="Masukan Tahun Kelulusan">
                @error('tahun')
                  <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
          
        
      </div>
            <div class="form-group">
                <label for="ijazah">Scan Ijazah Pendidikan Terakhir</label>
                <input type="file" class="form-control-file @error('ijazah') is-invalid @enderror" id="ijazah"  name="ijazah">
                @error('ijazah')
                  <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="ktp">Scan Ktp Elektronik</label>
                <input type="file" class="form-control-file e @error('ktp') is-invalid @enderror" id="ktp"  name="ktp">
                @error('ktp')
                  <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="foto">Scan Pas Foto</label>
                <input type="file" class="form-control-file e @error('foto') is-invalid @enderror" id="foto"  name="foto">
                @error('foto')
                  <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="skck">Scan SKCK dari Kepolisian</label>
                <input type="file" class="form-control-file e @error('skck') is-invalid @enderror" id="skck"  name="skck">
                @error('skck')
                  <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="surat_dokter">Scan Surat Keterangan Sehat</label>
                <input type="file" class="form-control-file e @error('surat_dokter') is-invalid @enderror" id="surat_dokter"  name="surat_dokter">
                @error('surat_dokter')
                  <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <input type="hidden" class="form-control" value="Belum Diverifikasi" id="status"  name="status" readonly>
            <br>
            <a href="{{url('/')}}" type="button" class="btn btn-danger">Batal</a>
            <button type="submit" class="btn btn-success">Daftar</button>
            <br>
            <br>
            <br>
  </div>
</form>
</div>
@endsection