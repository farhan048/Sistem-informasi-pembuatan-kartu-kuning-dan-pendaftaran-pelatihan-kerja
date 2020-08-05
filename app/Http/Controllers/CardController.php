<?php

namespace App\Http\Controllers;

use PDF;
use App\Card;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class CardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kartu = Card::orderBy('id', 'desc')->get();;
        return view('admin.validkartu', compact('kartu'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
            'umur.required'                 => 'Umur Tidak Boleh Kosong',
            'pendidikan.required'           => 'Pendidikan Terakhir Tidak Boleh Kosong',
            'pendidikan.regex'              => 'Format Pendidikan Terakhir Salah',
            'jurusan.required'              => 'Jurusan Tidak Boleh Kosong',
            'jurusan.regex'                 => 'Format Jurusan Salah',
            'tahun.required'                => 'Tahun Kelulusan Tidak Boleh Kosong',
            'no_ponsel.required'            => 'No Ponsel Tidak Boleh Kosong',
            'ijazah.required'               => 'Ijazah Tidak Boleh Kosong',
            'ijazah.image'                  => 'File Harus Berupa jpeg, jpg, png',
            'ijazah.uploaded'               => 'Ukuran File Melebihi Batas 2 MB',
            'ktp.required'                  => 'KTP Tidak Boleh Kosong',
            'ktp.image'                     => 'File Harus Berupa jpeg, jpg, png',
            'ktp.uploaded'                  => 'Ukuran File Melebihi Batas 2 MB',
            'foto.required'                 => 'Foto Tidak Boleh Kosong',
            'foto.image'                    => 'File Harus Berupa jpeg, jpg, png',
            'foto.uploaded'                 => 'Ukuran File Melebihi Batas 2 MB',
            'skck.required'                 => 'SKCK Tidak Boleh Kosong',
            'skck.image'                    => 'File Harus Berupa jpeg, jpg, png',
            'skck.uploaded'                 => 'Ukuran File Melebihi Batas 2 MB',
            'surat_dokter.required'         => 'Surat Keterangan Sehat Tidak Boleh Kosong',
            'surat_dokter.image'            => 'File Harus Berupa jpeg, jpg, png',
            'surat_dokter.uploaded'         => 'Ukuran File Melebihi Batas 2 MB'
        ]);

        $pathijazah        = $request->file('ijazah')->store('upload/kartu-kuning/foto/ijazah');
        $pathktp           = $request->file('ktp')->store('upload/kartu-kuning/foto/ktp');
        $pathfoto          = $request->file('foto')->store('upload/kartu-kuning/foto/pas foto');
        $pathskck          = $request->file('skck')->store('upload/kartu-kuning/foto/skck');
        $pathsurat_dokter  = $request->file('surat_dokter')->store('upload/kartu-kuning/foto/surat dokter');
        $form_data = array(
            'nik'               =>  $request->nik,
            'nama'              =>  $request->nama,
            'tempat'            =>  $request->tempat,
            'tanggal'           =>  $request->tanggal,
            'jenis_kelamin'     =>  $request->jenis_kelamin,
            'agama'             =>  $request->agama,
            'alamat'            =>  $request->alamat,
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
        Card::create($form_data);
        return redirect('/layanan/kartu-kuning')->with('status', 'Data Berhasil Ditambah');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Card  $card
     * @return \Illuminate\Http\Response
     */
    public function show(Card $card)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Card  $card
     * @return \Illuminate\Http\Response
     */
    public function edit(Card $card)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Card  $card
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Card $card)
    {
        $request->validate([
            'status'            => 'required'
        ]);
        Card::where('id', $card->id)
            ->update([
                'status'  => $request->status
            ]);
        return redirect('validasi/card')->with('status', 'Data Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Card  $card
     * @return \Illuminate\Http\Response
     */
    public function destroy(Card $card)
    {
        Card::destroy($card->id);
        return redirect('validasi/card')->with('status', 'Data Berhasil Dihapus');
    }

    public function generatePDF($id)

    {
        $data = Card::find($id);
        $pdf = PDF::loadView('admin.pdf', compact('data'));
        return $pdf->download('Kartu-Kuning_'.$data->nama.'.pdf');
    }
}
