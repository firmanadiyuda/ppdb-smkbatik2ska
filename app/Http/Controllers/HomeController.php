<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pendaftar;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $totalPendaftar = Pendaftar::all()->count();
        $totalMenungguValidasi = Pendaftar::where('status', 'Menunggu Validasi Pembayaran')->count();
        $totalBelumDaftarUlang = Pendaftar::where('status', 'Segera Melakukan Daftar Ulang')->count();
        $totalDiterima = Pendaftar::where('status', 'Diterima')->count();
        $totalTidakDiterima = Pendaftar::where('status', 'Tidak Diterima')->count();

        $totalOtomatisasiTataKelolaPerkantoran = Pendaftar::where('jurusan', 'Otomatisasi Tata Kelola Perkantoran')->count();
        $totalMultimedia = Pendaftar::where('jurusan', 'Multimedia')->count();
        $totalTataKelolaKecantikanKulitdanRambut = Pendaftar::where('jurusan', 'Tata Kelola Kecantikan Kulit dan Rambut')->count();
        $totalKeperawatan = Pendaftar::where('jurusan', 'Keperawatan')->count();


        $pendaftar = Pendaftar::paginate(20);
        return view('dashboard')->with([
            'totalPendaftar' => $totalPendaftar,
            'totalMenungguValidasi' => $totalMenungguValidasi,
            'totalBelumDaftarUlang' => $totalBelumDaftarUlang,
            'totalDiterima' => $totalDiterima,
            'totalTidakDiterima' => $totalTidakDiterima,
            'pendaftar' => $pendaftar,

            'totalOtomatisasiTataKelolaPerkantoran' => $totalOtomatisasiTataKelolaPerkantoran,
            'totalMultimedia' => $totalMultimedia,
            'totalTataKelolaKecantikanKulitdanRambut' => $totalTataKelolaKecantikanKulitdanRambut,
            'totalKeperawatan' => $totalKeperawatan

            ]);
    }
}
