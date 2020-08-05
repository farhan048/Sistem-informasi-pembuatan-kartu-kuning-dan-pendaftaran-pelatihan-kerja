<?php

namespace App\Http\Controllers;

use App\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class LoginController extends Controller
{

    public function indexLogin()
    {
        return view('admin.login');
    }
    public function loginPost(Request $request)
    {
        $auth = auth()->guard('admin');
        $credential = [
            'username' => $request->username,
            'password' => $request->password
        ];

        $validator = $request->validate(
            [
                'username'  => 'required|string|exists:admins,username|regex:/^[a-zA-Z]*$/',
                'password'  => 'required|string'
            ],
            [
                'username.required' => 'Username Tidak Boleh Kosong',
                'username.exists'  => 'Username salah',
                'password.required' => 'Password Tidak Boleh Kosong',
                'username.regex'   => 'Format Username Salah'
            ]
        );
        if ($auth->attempt($credential)) {
            $nama = $auth->user()->nama;
            // $request->session()->put('username', $request->username);
            return redirect('admin/dashboard')->with('status', 'Selamat Datang');
        } else {
            return redirect()->back()->with(['salah' => 'Password salah']);
        }
    }
    public function logout()
    {
        Auth::guard('admin')->logout();
        return redirect('admin/')->with('status', 'Anda Sudah Logout');
    }
}
