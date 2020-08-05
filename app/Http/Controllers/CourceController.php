<?php

namespace App\Http\Controllers;

use App\Cource;
use Illuminate\Http\Request;

class CourceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pelatihan = Cource::all();
        return view('admin.pelatihan', compact('pelatihan'));
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
            'pelatihan' => 'required|regex:/^[0-9a-zA-Z_\s]*$/'
        ],
        [
            'pelatihan.required'          => 'Skema Pelatihan Tidak Boleh Kosong',
            'pelatihan.regex'             => 'Format Skema Pelatihan Salah',
        ]);

        Cource::create($request->all());
        return redirect('/admin/cource')->with('status','Data Berhasil Ditambah');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Cource  $cource
     * @return \Illuminate\Http\Response
     */
    public function show(Cource $cource)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Cource  $cource
     * @return \Illuminate\Http\Response
     */
    public function edit(Cource $cource)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Cource  $cource
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cource $cource)
    {
        $request->validate([
            'pelatihan' => 'required|regex:/^[0-9a-zA-Z_\s]*$/'
        ],
        [
            'pelatihan.required'          => 'Skema Pelatihan Tidak Boleh Kosong',
            'pelatihan.regex'             => 'Format Skema Pelatihan Salah',
        ]);
        Cource::where('id', $cource->id)
        ->update([
            'pelatihan' => $request->pelatihan
        ]);
        return redirect('/admin/cource')->with('status','Data Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Cource  $cource
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cource $cource)
    {
        Cource::destroy($cource->id);
        return redirect('/admin/cource')->with('status', 'Data Berhasil Dihapus');
    }
}
