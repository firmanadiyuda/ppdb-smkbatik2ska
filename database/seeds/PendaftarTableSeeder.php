<?php

use Illuminate\Database\Seeder;

class PendaftarTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pendaftar')->insert([
            'nama_siswa' => 'Firman Adiyuda',
            'jenis_kelamin' => 'Laki - Laki',
            'tempat_lahir' => 'Jakarta',
            'tanggal_lahir' => '2000-01-25',
            'agama' => 'Islam',
            'alamat_siswa' => 'Perum Griya Permata Asri 3 Blok A No. 12 A RT 01 RW 12, Kelurahan Sonorejo, Kecamatan Sukoharjo, Kabupaten Sukoharjo, Jawa Tengah 57551.',
            'telp_hp_siswa' => 82211253961,

            'nama_ortu' => 'Handayani',
            'pekerjaan_ortu' => 'Karyawan Swasta',
            'alamat_ortu' => 'Perum Griya Permata Asri 3 Blok A No. 12 A RT 01 RW 12, Kelurahan Sonorejo, Kecamatan Sukoharjo, Kabupaten Sukoharjo, Jawa Tengah 57551.',
            'telp_hp_ortu' => '82211253961',

            'asal_sekolah' => 'SMP Darussalam Surakarta',
            'jurusan' => 'Multimedia'
        ]);
    }
}
