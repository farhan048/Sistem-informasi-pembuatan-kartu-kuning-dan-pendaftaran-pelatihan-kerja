<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Http\UploadedFile;
use Tests\TestCase;
use App\Registration;
use File;

class RegistrationControllerTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testStore()
    {
        ///ngambil file gambar dari folder gambar trus nama file
        $pathfoto               = storage_path('gambar/pas foto.jpg');
        $originalName_foto      = "pas foto.jpg";
        $mime                   = 'img/jpg';
        $file1                  = new UploadedFile($pathfoto, $originalName_foto, 0, null, true);
        $nama_file_foto         = time()."_".$file1->getClientOriginalName();
        
        $pathijazah             = storage_path('gambar/ijazah.jpg');
        $originalName_ijazah    = "ijazah.jpg";
        $mime                   = 'img/jpg';
        $file2                  = new UploadedFile($pathijazah, $originalName_ijazah, 0, null, true);
        $nama_file_ijazah       = time()."_".$file2->getClientOriginalName();
            
        $pathktp                = storage_path('gambar/ktp.jpg');
        $originalName_ktp       = "ktp.jpg";
        $mime                   = 'img/jpg';
        $file3                  = new UploadedFile($pathktp, $originalName_ktp, 0, null, true);
        $nama_file_ktp          = time()."_".$file3->getClientOriginalName();
            
        $pathskck               = storage_path('gambar/skck.jpg');
        $originalName_skck      = "skck.jpg";
        $mime                   = 'img/jpg';
        $file4                  = new UploadedFile($pathskck, $originalName_skck, 0, null, true);
        $nama_file_skck         = time()."_".$file4->getClientOriginalName();
            
        $pathsurat              = storage_path('gambar/surat dokter.jpg');
        $originalName_surat     = "surat dokter.jpg";
        $mime                   = 'img/jpg';
        $file5                  = new UploadedFile($pathsurat, $originalName_surat, 0, null, true);
        $nama_file_surat        = time()."_".$file5->getClientOriginalName();
        
        ///ngisi datanya
        $form_data = array(
            'nik'               => "1805055",
            'nama'              => "SULTAN ALIF NOVANA PUTRA",
            'tempat'            => "Cirebon",
            'tanggal'           => "1999-03-30",
            'jenis_kelamin'     => "Laki-Laki",
            'agama'             => "Islam",
            'alamat'            => "Cirebon Perum",
            'skema'             => "pengelasan_2020",
            'umur'              => "20",       
            'pendidikan'        => "SMA",       
            'jurusan'           => "IPA",
            'tahun'             => "2018",
            'no_ponsel'         => "089627298148",
            'ijazah'            =>  $nama_file_ijazah,
            'ktp'               =>  $nama_file_ktp,
            'foto'              =>  $nama_file_foto,
            'skck'              =>  $nama_file_skck,
            'surat_dokter'      =>  $nama_file_surat,
            'status'            => "Belum Diverifikasi"
        );
            ///insert datanya ke database
            Registration::create($form_data);

            ///ngecopy gambar ke folder upload\testing\pelatihan
            $toCopy1     = public_path('upload/testing/pelatihan/'.$nama_file_foto);
            File::copy($pathfoto, $toCopy1);
            $toCopy2     = public_path('upload/testing/pelatihan/'.$nama_file_ijazah);
            File::copy($pathijazah, $toCopy2);
            $toCopy3     = public_path('upload/testing/pelatihan/'.$nama_file_ktp);
            File::copy($pathktp, $toCopy3);
            $toCopy4     = public_path('upload/testing/pelatihan/'.$nama_file_skck);
            File::copy($pathskck , $toCopy4);
            $toCopy5     = public_path('upload/testing/pelatihan/'.$nama_file_surat);
            File::copy($pathsurat, $toCopy5);

        /// nyamain datanya sama yang tadi diisi datanya
        $this->assertDatabaseHas('registrations', [
            'nik'               => "1805055",
            'nama'              => "SULTAN ALIF NOVANA PUTRA",
            'tempat'            => "Cirebon",
            'tanggal'           => "1999-03-30",
            'jenis_kelamin'     => "Laki-Laki",
            'agama'             => "Islam",
            'alamat'            => "Cirebon Perum",
            'skema'             => "pengelasan_2020",
            'umur'              => "20",       
            'pendidikan'        => "SMA",       
            'jurusan'           => "IPA",
            'tahun'             => "2018",
            'no_ponsel'         => "089627298148",
        ]);
    }
}
