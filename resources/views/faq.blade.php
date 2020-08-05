@extends('main')
@section('title', 'FAQ')
@section('content')
  <div class="container ">
    <!--Accordion wrapper-->
<div class="accordion md-accordion" id="accordionEx" role="tablist" aria-multiselectable="true">

  <!-- Accordion card -->
  <div class="card  bg-transparent border-0">

    <!-- Card header -->
    <div class="card-header  bg-transparent" role="tab" id="headingOne1">
      <a data-toggle="collapse" data-parent="#accordionEx" href="#collapseOne1" aria-expanded="true"
        aria-controls="collapseOne1">
        <h5 class="mb-0">
          <i class="fas fa-plus-square"></i>  Kantor Pelayanan 
        </h5>
      </a>
    </div>

    <!-- Card body -->
    <div id="collapseOne1" class="collapse show" role="tabpanel" aria-labelledby="headingOne1"
      data-parent="#accordionEx">
      <div class="card-body  bg-transparent">
      <p>Kami hanya memiliki satu kantor Pelayanan saja yaitu beralamat : </p> 
      <p>Jalan RE. Martadinata KM.6 Po Kertawangunan, Sindangagung, Kabupaten Kuningan, Jawa Barat</p> 
      <p>Kode Pos : 45513</p> 
      <p>Telp/Fax : (0232)-871661</p> 
      </div>
    </div>

  </div>
  <!-- Accordion card -->

  <!-- Accordion card -->
  <div class="card  bg-transparent border-0">

    <!-- Card header -->
    <div class="card-header  bg-transparent" role="tab" id="headingTwo2">
      <a class="collapsed  bg-transparent" data-toggle="collapse" data-parent="#accordionEx" href="#collapseTwo2"
        aria-expanded="false" aria-controls="collapseTwo2">
        <h5 class="mb-0">
          <i class="fas fa-plus-square"></i>   Jam Pelayanan 
        </h5>
      </a>
    </div>

    <!-- Card body -->
    <div id="collapseTwo2" class="collapse" role="tabpanel" aria-labelledby="headingTwo2"
      data-parent="#accordionEx">
      <div class="card-body  bg-transparent">
       <p>Senin - Kamis : </p>
       <p>07.30 - 14.20 WIB</p>
       <hr>
       <p>Jum'at :</p>
       <p>07.30 - 13.20 WIB</p>
       <hr>
       <p>Sabtu - Minggu & Hari Libur Nasional Lainya :</p>
       <p>Tutup</p>
      </div>
    </div>

  </div>
  <!-- Accordion card -->

  <!-- Accordion card -->
  <div class="card  bg-transparent border-0">
    <!-- Card header -->
    <div class="card-header  bg-transparent" role="tab" id="headingThree3">
      <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx" href="#collapseThree3"
        aria-expanded="false" aria-controls="collapseThree3">
        <h5 class="mb-0">
          <i class="fas fa-plus-square"></i>   Susanan Organisasi 
        </h5>
      </a>
    </div>

    <!-- Card body -->
    <div id="collapseThree3" class="collapse" role="tabpanel" aria-labelledby="headingThree3"
      data-parent="#accordionEx">
      <div class="card-body  bg-transparent">
       <p>Kepala : Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
       <p>Wakil Kepala : Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
       <p></p>
      </div>
    </div>

  </div>
  <!-- Accordion card -->

</div>
<!-- Accordion wrapper -->
  </div>
@endsection