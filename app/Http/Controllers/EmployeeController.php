<?php

namespace App\Http\Controllers;

use App\Employee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pegawai = employee::all();
        return view('admin.pegawai', compact('pegawai'));
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
            'nip'       => 'required|numeric',
            'nama'      => 'required|regex:/^[a-zA-Z\s]*$/',
            'alamat'    => 'required',
            'golongan'  => 'required',
            'jabatan'   => 'required',
            'email'     => 'required',
            'no_ponsel' => 'required|numeric',
            'foto'      => 'file|required|image:jpeg,jpg,png|max:2048'
        ],
        [
            'numeric'               => "Format Harus Berupa Angka",
            'nip.required'          => 'NIP Tidak Boleh Kosong',
            'nama.required'         => 'Nama Tidak Boleh Kosong',
            'alamat.required'       => 'Alamat Tidak Boleh Kosong',
            'golongan.required'     => 'Golongan Tidak Boleh Kosong',
            'jabatan.required'      => 'Jabatan Tidak Boleh Kosong',
            'email.required'        => 'Email Tidak Boleh Kosong',
            'no_ponsel.required'    => 'No Ponsel Tidak Boleh Kosong',
            'foto.required'         => 'foto Tidak Boleh Kosong',
            'nama.regex'            => 'Format Nama Salah',
            'foto.uploaded'         => 'Ukuran File Melebihi Batas 2 MB',
            'foto.image'            => 'File Harus Berupa jpeg, jpg, png',
        ]);

        $path = $request->file('foto')->store('upload/foto/pegawai');
        $form_data = array(
            'nip'       => $request->nip,
            'nama'      =>  $request->nama,
            'alamat'    =>  $request->alamat,
            'golongan'  =>  $request->golongan,
            'jabatan'   =>  $request->jabatan,
            'email'     =>  $request->email,
            'no_ponsel' =>  $request->no_ponsel,
            'foto'      =>  $path
        );
        employee::create($form_data);
        return redirect('/admin/employee')->with('status', 'Data Berhasil Ditambah');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function show(employee $employee)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function edit(employee $employee)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, employee $employee)
    {
        $request->validate([
            'nip'       => 'required|numeric',
            'nama'      => 'required|regex:/^[a-zA-Z\s]*$/',
            'alamat'    => 'required',
            'golongan'  => 'required',
            'jabatan'   => 'required',
            'email'     => 'required',
            'no_ponsel' => 'required|numeric',
            'foto'      => 'file|image:jpeg,jpg,png|max:2048'
        ],
        [
            'numeric'               => "Format Harus Berupa Angka",
            'nip.required'          => 'NIP Tidak Boleh Kosong',
            'nama.required'         => 'Nama Tidak Boleh Kosong',
            'alamat.required'       => 'Alamat Tidak Boleh Kosong',
            'golongan.required'     => 'Golongan Tidak Boleh Kosong',
            'jabatan.required'      => 'Jabatan Tidak Boleh Kosong',
            'email.required'        => 'Email Tidak Boleh Kosong',
            'no_ponsel.required'    => 'No Ponsel Tidak Boleh Kosong',
            'foto.required'         => 'foto Tidak Boleh Kosong',
            'nama.regex'            => 'Format Nama Salah',
            'foto.uploaded'         => 'Ukuran File Melebihi Batas 2 MB',
            'foto.image'            => 'File Harus Berupa jpeg, jpg, png',
        ]);
        
        if ($request->hasFile('foto')) {
            Storage::delete($employee->foto);
            $path = $request->file('foto')->store('upload/foto/pegawai');
            $employee->update($request->except('foto'));
            $employee->foto = $path;
            $employee->save();
        } else {
            $employee->update($request->all());
        }
        return redirect('/admin/employee')->with('status', 'Data Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function destroy(employee $employee)
    {
        employee::destroy($employee->id);
        return redirect('/admin/employee')->with('status', 'Data Berhasil Dihapus');
    }
}
