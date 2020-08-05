@extends('main')
@section('title', 'Detail Kartu Kuning')
@section('content')
<div class="container">
<div class="jumbotron jumbotron-fluid bg-transparent">
  <h3 class="row align-items-center justify-content-center">Kartu Kuning & Fungsinya</h3>
  <hr>
  <p>Setiap tahun jumlah angkatan kerja semakin bertambah dan saling berlomba untuk mencari pekerjaan yang mereka inginkan. Hal ini tentu baik bagi instansi atau perusahaan karena ketersediaan tenaga kerja yang melimpah memperbesar kemungkinan untuk mendapatkan calon karyawan yang semakin baik. Pada instansi pemerintahan, 
    biasanya terdapat berkas khusus yang disyaratkan, yakni Kartu Kuning.</p>
  <p>Kartu Kuning sendiri merupakan kartu tanda pencari kerja yang disebut juga dengan kartu AK1. Jika dilihat, kartu ini berisikan data mengenai identitas diri si pelamar, data kelulusan, 
    dan riwayat pendidikan hingga tingkat terakhir yang ditempuh. Jika untuk angkatan kerja Kartu Kuning berfungsi sebagai tanda mencari kerja, dari sisi pemerintah, pembuatan Kartu Kuning sekaligus jadi sarana sensus angkatan kerja secara tidak langsung.</p>
  <h4 class="display-4">SYARAT PEMBUATAN KARTU KUNING</h4>
   
  <h5 class="display-5">Persyaratan Administratif :</h5>
  <li class="list-group-item">Scan ijazah terahir;</li>
  <li class="list-group-item">Scan Surat keterangan berkelakuan baik dari  Kepolisian  setempat;</li>
  <li class="list-group-item">Scan Surat keterangan sehat dari dokter;</li>
  <li class="list-group-item">Scan KTP;</li>
  <li class="list-group-item">Scan Foto;</li>

</ul>
  </div>
  
<div class="site-section section-4">
  <h3 class="row align-items-center justify-content-center">Menuju masa depan yang cerah</h3>
  <p class="row align-items-center justify-content-center text-center">Tunggu apa lagi? buat katu kuning mu sekarang!</p>
  <div class="row md-12">
    <a class="px-md-5 mx-auto btn btn-info btn-lg" href="{{url('layanan/kartu-kuning')}}" role="button">Daftar Sekarang</a>
  </div>

  </div>
</div>
@endsection