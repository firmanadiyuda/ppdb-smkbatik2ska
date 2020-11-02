<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class BuatTabelPendaftar extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pendaftar', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama_siswa');
            $table->bigInteger('nisn')->nullable();
            $table->string('jenis_kelamin');
            $table->string('tempat_lahir', 255);
            $table->date('tanggal_lahir');
            $table->string('agama', 255);
            $table->string('alamat_siswa', 255);
            $table->bigInteger('telp_hp_siswa');

            $table->string('nama_ortu', 255);
            $table->string('pekerjaan_ortu', 255);
            $table->string('alamat_ortu', 255);
            $table->bigInteger('telp_hp_ortu');
            
            $table->string('nama_wali', 255)->nullable();
            $table->string('pekerjaan_wali', 255)->nullable();
            $table->string('alamat_wali', 255)->nullable();
            $table->bigInteger('telp_hp_wali')->nullable();

            $table->string('asal_sekolah', 255);
            $table->float('nilai_uan')->nullable();
            $table->float('nilai_bahasa_indonesia')->nullable();
            $table->float('nilai_matematika')->nullable();
            $table->float('nilai_bahasa_inggris')->nullable();
            $table->float('nilai_ipa')->nullable();

            $table->string('status', 255)->default('Segera Melakukan Pembayaran');
            $table->string('jurusan', 255);
            
            $table->bigInteger('tinggi_badan')->nullable();
            $table->bigInteger('berat_badan')->nullable();
            $table->string('buta_warna')->nullable();

            $table->string('bukti_pembayaran')->nullable();

            $table->timestamps();
        });

        DB::statement("ALTER TABLE pendaftar AUTO_INCREMENT = 100;");

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pendaftar');
    }
}
