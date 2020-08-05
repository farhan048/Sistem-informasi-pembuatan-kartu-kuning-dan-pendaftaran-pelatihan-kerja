<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegistrationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registrations', function (Blueprint $table) {
            $table->id();
            $table->string('nik', 40);
            $table->string('nama', 50);
            $table->string('tempat', 50);
            $table->date('tanggal');
            $table->string('jenis_kelamin',30);
            $table->string('agama',30);
            $table->string('alamat', 255);
            $table->string('skema', 40);
            $table->string('umur', 5);
            $table->string('pendidikan', 40);
            $table->string('jurusan', 40);
            $table->string('tahun',10);
            $table->string('no_ponsel',15);
            $table->string('ijazah',255);
            $table->string('ktp',255);
            $table->string('foto',255);
            $table->string('skck',255);
            $table->string('surat_dokter',255);
            $table->string('status',20);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('registrations');
    }
}
