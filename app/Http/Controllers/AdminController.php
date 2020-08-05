<?php

namespace App\Http\Controllers;

use App\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $admins = Admin::all();
        return view('admin.admin', compact('admins'));
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
            'username'  => 'required',
            'nama'      => 'required|regex:/^[a-zA-Z\s]*$/',
            'password'  => 'required|min:8'
        ],
        [
            'username.required' => 'Username Tidak Boleh Kosong',
            'nama.required'     => 'Nama Tidak Boleh Kosong',
            'password.required' => 'Password Tidak Boleh Kosong',
            'username.regex'    => 'Format Username Salah',
            'nama.regex'        => 'Format Nama Salah',
            'password.min'      => 'Minimal Password 8 Huruf'
        ]);

        Admin::create([
            'username' => $request->username,
            'nama' => $request->nama,
            'level' => $request->level,
            'password' => Hash::make($request->password)
        ]);

        return redirect('/manajemen/admin')->with('status', 'Data Berhasil Ditambah');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function showProfile(Request $request)
    {
        $auth = auth()->guard('admin');
        $user = $auth->user();
        return view('admin.profile', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function edit(Admin $admin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Admin $admin)
    {
        $request->validate([
            'username'  => 'required',
            'nama'      => 'required|regex:/^[a-zA-Z\s]*$/',
        ],
        [
            'username.required' => 'Username Tidak Boleh Kosong',
            'nama.required'     => 'Nama Tidak Boleh Kosong',
            'username.regex'    => 'Format Username Salah',
            'nama.regex'        => 'Format Nama Salah',
        ]);

       if ($request->filled('password')) {
            $admin->update([
                'username'  => $request->username,
                'nama'      => $request->nama,
                'password'  => Hash::make($request->password),
            ]);
        } else {
            $admin->update($request->except('password'));
        }
        return redirect('manajemen/admin')->with('status', 'Data Berhasil Diubah');
    }

    public function editByProfile(Request $request)
    {
        $request->validate([
            'username'  => 'required',
            'nama'      => 'required|regex:/^[a-zA-Z\s]*$/',
        ],
        [
            'username.required' => 'Username Tidak Boleh Kosong',
            'nama.required'     => 'Nama Tidak Boleh Kosong',
            'username.regex'    => 'Format Username Salah',
            'nama.regex'        => 'Format Nama Salah',
        ]);

        $auth = auth()->guard('admin');
        $user = $auth->user();

        if ($request->filled('password')) {
            $user->update([
                'username'  => $request->username,
                'nama'      => $request->nama,
                'password'  => Hash::make($request->password),
            ]);
        } else {
            $user->update($request->except('password'));
        }

        return redirect('profile/admin')->with('status', 'Data Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function destroy(Admin $admin)
    {
        Admin::destroy($admin->id);
        return redirect('manajemen/admin')->with('status', 'Data Berhasil Dihapus');
    }
}
