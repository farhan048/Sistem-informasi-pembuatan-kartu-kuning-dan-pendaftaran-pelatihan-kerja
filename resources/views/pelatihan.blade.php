@extends('main')
@section('content')
<div class="container">
<div class="jumbotron jumbotron-fluid bg-transparent">
  <h3 class="row align-items-center justify-content-center">Ikuti pelatihan dan tingkatkan keterampilan mu sekarang!</h3>
  <p class="row align-items-center justify-content-center text-center">Layanan pelatihan kemnaker merupakan layanan pelatihan berbasis offline didukung dengan mitra - mitra lembaga pelatihan <br> yang kredibel dan instruktur yang berpengalaman.</p>
  
    <h4 class="display-5">SYARAT- SYARAT  CALON PESERTA</h4>
    <h5 class="display-6">Persyaratan  umum  :</h5>
    <ul class="list-group list-group-flush">
      <li class="list-group-item"> Usia 17 tahun s.d. 23 tahun;</li>
      <li class="list-group-item">Sehat jasmani dan rohani;</li>
      <li class="list-group-item">Tidak bertato, atau pun bertindik;</li>
      <li class="list-group-item"> Berkelakuan baik yang dinyatakan dari  Kepolisian;</li>
      <li class="list-group-item">Tinggi badan minimal 165 cm, dan berat badan seimbang;</li>
      <li class="list-group-item">Tidak buta warna, tuna wicara, tuna rungu,  dan tuna  netra;</li>
      <li class="list-group-item"> Tidak  mengalami cacat  fisik;</li>
      <li class="list-group-item"> Tidak sedang  mengikuti  pendidikan atau  pelatihan di tempat lain;</li>
      <li class="list-group-item"> Belum  menikah</li>
      <br>
      <h5 class="display-6">Persyaratan Administratif :</h5>
      <li class="list-group-item">Scan ijazah terahir;</li>
      <li class="list-group-item">Scan Surat keterangan berkelakuan baik dari  Kepolisian  setempat;</li>
      <li class="list-group-item">Scan Surat keterangan sehat dari dokter;</li>
      <li class="list-group-item">  Scan KTP;</li>
      <li class="list-group-item">  Scan Foto;</li>
</ul>
  </div>
  
<div class="site-section section-4">
  <h3 class="row align-items-center justify-content-center">Menuju masa depan yang cerah</h3>
  <p class="row align-items-center justify-content-center text-center">Tunggu apa lagi? tingkatkan keterampilan mu sekarang!</p>
  <div class="row md-12">
    <a class="px-md-5 mx-auto btn btn-info btn-lg" href="{{url('layanan/pelatihan')}}" role="button">Daftar Sekarang</a>
  </div>

  </div>
</div>
@endsection