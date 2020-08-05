<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title>Kartu Tanda Pencari Kerja</title>
  </head>
     
  <p class="text-center"> <b> PEMERINTAH KABUPATEN KUNINGAN </b>
  <p class="text-center"> <b> DINAS TENAGA KERJA dan TRANSMIGRASI</b>
  <p class="text-center"><b> KABUPATEN KUNINGAN</b><br><br>
  <p class="text-center"> Alamat: Jl. RE. Martadinata KM.6 Kertawangunan, Sindangagung, Kabupaten Kuningan, Jawa Barat 45513</p>
   
 
   <hr>
   <br>
  <p class="text-center"><b><u>Kartu Tanda Pencari Kerja</b></u>
   <p class="text-center">Nomor Pencaker : {{$data->id}} / PCK / {{date('d/m/Y', strtotime($data->created_at))}} <br> 
               <table class="table table-borderless">
                 <tr>
                   <td>Nama</td>
                   <td>:</td>
                   <td>{{$data->nama}}</td>
                 </tr>
                     <tr>
                   <td>Tempat, Tanggal Lahir</td>
                   <td>:</td>
                   <td>{{$data->tempat}}, {{date('d-m-Y', strtotime($data->tanggal))}}</td>
                 </tr>
                 <tr>
                   <td>Jenis Kelamin</td>
                   <td>:</td>
                   <td>{{$data->jenis_kelamin}}</td>
                 </tr>
                 <tr>
                   <td>Agama</td>
                   <td>:</td>
                   <td>{{$data->agama}}</td>
                 </tr>
                 <tr>
                   <td>Umur</td>
                   <td>:</td>
                   <td>{{$data->umur}}</td>
                 </tr>
                 <tr>
                   <td>Pendidikan Terakhir</td>
                   <td>:</td>
                   <td>{{$data->pendidikan}} - {{$data->jurusan}} - {{$data->tahun}}</td>
                 </tr>
                 <tr>
                   <td>Alamat Lengkap</td>
                   <td>:</td>
                   <td>{{$data->alamat}}</td>
                 </tr>
                 
               </table>
 
               <p class="text-right"> Kuningan, {{date('d-m-Y', strtotime($data->updated_at))}}<br>               
               <p class="text-right">  Pencari Kerja
                 <br><br>
               <p class="text-right">  <br><br>{{$data->nama}}
 
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>
