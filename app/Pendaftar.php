<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Pendaftar;

class Pendaftar extends Model
{
    protected $table = 'pendaftar';
    protected $fillable = [
        'nama_siswa',
        'nisn',
        'jenis_kelamin',
        'tempat_lahir',
        'tanggal_lahir',
        'agama',
        'alamat_siswa',
        'telp_hp_siswa',

        'nama_ortu',
        'pekerjaan_ortu',
        'alamat_ortu',
        'telp_hp_ortu',
        
        'nama_wali',
        'pekerjaan_wali',
        'alamat_wali',
        'telp_hp_wali',

        'asal_sekolah',
        'nilai_uan',
        'nilai_bahasa_indonesia',
        'nilai_matematika',
        'nilai_bahasa_inggris',
        'nilai_ipa'
    ];
}
