<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Card extends Model
{
    protected $fillable = ['nik', 'nama', 'tempat', 'tanggal', 'jenis_kelamin', 'agama', 'alamat', 'umur', 'pendidikan', 'jurusan', 'tahun', 'no_ponsel', 'ijazah', 'ktp', 'foto', 'skck', 'surat_dokter', 'status'];
}
