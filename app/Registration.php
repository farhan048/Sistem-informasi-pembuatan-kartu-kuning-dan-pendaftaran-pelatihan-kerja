<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Registration extends Model
{
    protected $fillable = [
        'nik', 'nama', 'tempat', 'tanggal',
        'tanggal', 'jenis_kelamin', 'agama',
        'alamat', 'skema', 'umur', 'pendidikan',
        'jurusan', 'tahun', 'no_ponsel', 'ijazah',
        'ktp', 'foto', 'skck', 'surat_dokter', 'status'
    ];
}
