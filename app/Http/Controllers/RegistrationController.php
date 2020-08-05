<?php

namespace App\Http\Controllers;

use App\Cource;
use App\Registration;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class RegistrationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $pendaftaran = Registration::all();
        return view('admin.validpelatihan', compact('pendaftaran'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $skema = Cource::all();
        return view('layanan.formlatian', compact('skema'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nik'               => 'required|numeric',
            'nama'              => 'required|regex:/^[a-zA-Z\s]*$/',
            'tempat'            => 'required|regex:/^[a-zA-Z\s]*$/',
            'tanggal'           => 'required|date',
            'jenis_kelamin'     => 'required',
            'agama'             => 'required',
            'alamat'            => 'required',
            'skema'             => 'required',
            'umur'              => 'required|numeric',
            'pendidikan'        => 'required|regex:/^[a-zA-Z\s]*$/',
            'jurusan'           => 'required|regex:/^[a-zA-Z\s]*$/',
            'tahun'             => 'required|numeric',
            'no_ponsel'         => 'required|numeric',
            'ijazah'            => 'required|image|mimes:jpeg,jpg,png|max:2048',
            'ktp'               => 'required|image|mimes:jpeg,jpg,png|max:2048',
            'foto'              => 'required|image|mimes:jpeg,jpg,png|max:2048',
            'skck'              => 'required|image|mimes:jpeg,jpg,png|max:2048',
            'surat_dokter'      => 'required|image|mimes:jpeg,jpg,png|max:2048',
            'status'            => 'required'
        ],
        [
            'numeric'                       => "Format Harus Berupa Angka",
            'nik.required'                  => 'NIK Tidak Boleh Kosong',
            'nama.required'                 => 'Nama Tidak Boleh Kosong',
            'nama.regex'                    => 'Format Nama Salah',
            'tempat.required'               => 'Tempat Lahir Tidak Boleh Kosong',
            'tempat.regex'                  => 'Format Tempat Lahir Salah',
            'tanggal.required'              => 'Tanggal Lahir Tidak Boleh Kosong',
            'tanggal.date'                  => 'Format Tanggal Salah',
            'jenis_kelamin.required'        => 'Jenis Kelamin Tidak Boleh Kosong',
            'agama.required'                => 'Agama Tidak Boleh Kosong',
            'alamat.required'               => 'Alamat Tidak Boleh Kosong',
            'skema.required'                => 'Skema Pelatihan Tidak Boleh Kosong',
            'umur.required'                 => 'Umur Tidak Boleh Kosong',
            'pendidikan.required'           => 'Pendidikan Terakhir Tidak Boleh Kosong',
            'pendidikan.regex'              => 'Format Pendidikan Terakhir Salah',
            'jurusan.required'              => 'Jurusan Tidak Boleh Kosong',
            'jurusan.regex'                 => 'Format Jurusan Salah',
            'tahun.required'                => 'Tahun Kelulusan Tidak Boleh Kosong',
            'no_ponsel.required'            => 'No Ponsel Tidak Boleh Kosong',
            'ijazah.required'               => 'Ijazah Tidak Boleh Kosong',
            'ijazah.image'                  => 'File Harus Berupa jpeg, jpg, png',
            'ijazah.uploaded'                    => 'Ukuran File Melebihi Batas 2 MB',
            'ktp.required'                  => 'KTP Tidak Boleh Kosong',
            'ktp.image'                     => 'File Harus Berupa jpeg, jpg, png',
            'ktp.uploaded'                       => 'Ukuran File Melebihi Batas 2 MB',
            'foto.required'                 => 'Foto Tidak Boleh Kosong',
            'foto.image'                    => 'File Harus Berupa jpeg, jpg, png',
            'foto.uploaded'                      => 'Ukuran File Melebihi Batas 2 MB',
            'skck.required'                 => 'SKCK Tidak Boleh Kosong',
            'skck.image'                    => 'File Harus Berupa jpeg, jpg, png',
            'skck.uploaded'                      => 'Ukuran File Melebihi Batas 2 MB',
            'surat_dokter.required'         => 'Surat Keterangan Sehat Tidak Boleh Kosong',
            'surat_dokter.image'            => 'File Harus Berupa jpeg, jpg, png',
            'surat_dokter.uploaded'              => 'Ukuran File Melebihi Batas 2 MB',
            'status.required'               => 'Status Tidak Boleh Kosong'
        ]);

        $pathijazah        = $request->file('ijazah')->store('upload/pelatihan/foto/ijazah');
        $pathktp           = $request->file('ktp')->store('upload/pelatihan/foto/ktp');
        $pathfoto          = $request->file('foto')->store('upload/pelatihan/foto/pas foto');
        $pathskck          = $request->file('skck')->store('upload/foto/skck');
        $pathsurat_dokter  = $request->file('surat_dokter')->store('upload/pelatihan/foto/surat dokter');
        $form_data = array(
            'nik'               =>  $request->nik,
            'nama'              =>  $request->nama,
            'tempat'            =>  $request->tempat,
            'tanggal'           =>  $request->tanggal,
            'jenis_kelamin'     =>  $request->jenis_kelamin,
            'agama'             =>  $request->agama,
            'alamat'            =>  $request->alamat,
            'skema'             =>  $request->skema,
            'umur'              =>  $request->umur,
            'pendidikan'        =>  $request->pendidikan,
            'jurusan'           =>  $request->jurusan,
            'tahun'             =>  $request->tahun,
            'no_ponsel'         =>  $request->no_ponsel,
            'ijazah'            =>  $pathijazah,
            'ktp'               =>  $pathktp,
            'foto'              =>  $pathfoto,
            'skck'              =>  $pathskck,
            'surat_dokter'      =>  $pathsurat_dokter,
            'status'            =>  $request->status
        );
        Registration::create($form_data);
        return redirect('/layanan/pelatihan')->with('status', 'Data Berhasil Ditambah');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Registration  $registration
     * @return \Illuminate\Http\Response
     */
    public function show(Registration $registration)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Registration  $registration
     * @return \Illuminate\Http\Response
     */
    public function edit(Registration $registration)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Registration  $registration
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Registration $registration)
    {
        $request->validate([
            'status'            => 'required'
        ]);
        Registration::where('id', $registration->id)
            ->update([
                'status'  => $request->status
            ]);
        return redirect('validasi/registration')->with('status', 'Data Berhasil Diubah');
    }
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Registration  $registration
     * @return \Illuminate\Http\Response
     */
    public function destroy(Registration $registration)
    {
        Registration::destroy($registration->id);
        return redirect('/validasi/registration')->with('status', 'Data Berhasil Dihapus');
    }
}
