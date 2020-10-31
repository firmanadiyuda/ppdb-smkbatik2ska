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
        $totalPembayaran = Pendaftar::where('status', 'daftar ulang')->count();
        $totalDaftarUlang = Pendaftar::where('status', 'pengumuman')->count();
        $totalLulus = Pendaftar::where('status', 'lulus')->count();
        $totalTidakLulus = Pendaftar::where('status', 'tidak lulus')->count();

        $pendaftar = Pendaftar::paginate(20);
        return view('dashboard')->with([
            'totalPendaftar' => $totalPendaftar,
            'totalPembayaran' => $totalPembayaran,
            'totalDaftarUlang' => $totalDaftarUlang,
            'totalLulus' => $totalLulus,
            'totalTidakLulus' => $totalTidakLulus,
            'pendaftar' => $pendaftar
            ]);
    }
}
