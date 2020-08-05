@extends('main')
@section('title', 'Home')
@section('content')
    

<div class="site-section">
  <div class="container">
    <div class="row">
      <div class="col-md-5">
        <h2 class="heading-39291">Ketahui Lebih Dalam Tentang DISNAKER KAB. KUNINGAN</h2>
        <p class="mb-5">Dinas Tenaga Kerja dan Transmigrasi Fokus program dan kegiatan tetap disandarkan pada salah satu prioritas pembangunan daerah yaitu meningkatkan kesejahteraan masyarakat dengan menurunkan angka kemiskinan dan pengangguran.</p>
        <p><a href="{{url('/profile')}}" class="more-39291">Pelajari Lebih Lanjut</a></p>
      </div>

      <div class="col-md-4 ml-auto">
        <div class="year-experience-99301">
          <h2 class="heading-39291">Terwujudnya Tenaga Kerja dan Transmigran Yang Maju dan Sejahtera</h2>
          
        </div>
      </div>
    </div>
  </div>
</div>
      

<div class="site-section">
  <div class="container">
    <div class="row  mb-5">
      <div class="col-md-7">
        <h2 class="heading-39291">Layanan <br> Kami</h2>
        <p>Mengutamakan Kenyamanan Efiesiensi Dalam Memberikan Pelayanan Kepada Masyarakat</p>
      </div>
    </div>

  <div class="row">
    <div class="col-md-6" data-aos="fade-up" data-aos-delay="">

      <div class="media-92812">
        <img src="images/img_1.jpg" alt="Image" class="img-fluid">
        <div class="text">
          <span class="caption">Pelayanan</span>
          <h3>Pendaftaran Kartu Kuning</h3>
          <p class="my-5"><a href="{{url('/kartu')}}" class="more-39291">Pelajari Lebih Lanjut</a></p>
        </div>
      </div>

    </div>

    <div class="col-md-6 ml-auto" data-aos="fade-up"  data-aos-delay="100">

      <div class="media-92812">
        <img src="images/img_2.jpg" alt="Image" class="img-fluid">
        <div class="text">
          <span class="caption">Pelayanan</span>
          <h3>Pendaftaran Pelatihan Kerja</h3>
          <p class="my-5"><a href="{{url('/pelatihan')}}" class="more-39291">Pelajari Lebih Lanjut</a></p>
        </div>
      </div>
    </div>    
  </div>    

<div class="site-section section-4">
  <div class="container">

    <div class="row justify-content-center text-center">
      <div class="col-md-7">
        <div class="slide-one-item owl-carousel">
          <blockquote class="testimonial-1">
            <span class="quote quote-icon-wrap"><span class="icon-format_quote"></span></span>
            <p>Jangan pernah membandingkan dirimu dengan orang lain. Setiap orang mempunyai cara dan jalannya masing-masing menuju kesuksesan.</p>
            <cite><span class="text-black">Bill Gates</span> &mdash; <span class="text-muted">Co-Founder Microsoft</span></cite>
          </blockquote>

          <blockquote class="testimonial-1">
            <span class="quote quote-icon-wrap"><span class="icon-format_quote"></span></span>
            <p>Sukses berjalan dari satu kegagalan ke kegagalan yang lain, tanpa kita kehilangan semangat.</p>
            <cite><span class="text-black">Abraham Lincoln</span> &mdash; <span class="text-muted">presiden ke-16 Amerika</span></cite>
          </blockquote>

          <blockquote class="testimonial-1">
            <span class="quote quote-icon-wrap"><span class="icon-format_quote"></span></span>
            <p> Tiap orang bisa punya mimpi, tapi tak semua bisa bangkitkan semangat tinggi.</p>
            <cite><span class="text-black">Najwa Shihab</span> &mdash; <span class="text-muted">Presenter dan jurnalis </span></cite>
          </blockquote>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection