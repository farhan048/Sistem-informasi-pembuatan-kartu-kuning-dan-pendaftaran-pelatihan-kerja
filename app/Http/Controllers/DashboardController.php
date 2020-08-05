<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Card;
use App\Admin;
use App\Employee;
use App\Registration;

class DashboardController extends Controller
{
    public function index()
    {
        $karyawan = employee::count();
        $kartu   = Card::count();
        $kartuberhasil = Card::where('status', 'Diterima')->count();
        $pelatihan = Registration::count();
        return view('admin.dashboard', compact('karyawan', 'kartu', 'kartuberhasil', 'pelatihan'));
    }

    // public function chart()
    // {
    //     $laki2 = Card::where('jenis_kelamin', 'Laki-Laki')->count();
    //     $perempuan = Card::where('jenis_kelamin', 'Perempuan')->count();
    //     return response()->json([$laki2, $perempuan]);
    // }
}
