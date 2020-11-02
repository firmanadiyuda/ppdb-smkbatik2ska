<?php

namespace App\Http\Controllers;

use App\Exports\PendaftarExport;
use App\Pendaftar;
use Hashids;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use PDF;

class ProsesDataController extends Controller {
    public function proses(Request $request) {
        $this->validate($request, [
            // 'name'    => 'required',
             // 'email'   => ‘required|email',
             // 'message' => 'required',
             'g-recaptcha-response' => 'required|captcha',
        ]);

        $data = $request->all();
        $pendaftar = Pendaftar::create($data);
        $kode = Hashids::encode($pendaftar->id);

        return redirect(url("/status/$kode"));
    }

    public function cari(Request $request) {
        $input = $request->all();

        $kode = Hashids::decode($input['search']);

        if ($pendaftar = Pendaftar::where('id', $kode)->first()) {
            return back()->with([
                'status' => 'Data ditemukan!',
                'alert' => 'alert-success',
                'pendaftar' => $pendaftar,
            ]);
        } else {
            return back()->with([
                'status' => 'Data tidak ditemukan!',
                'alert' => 'alert-danger',
            ]);
        }

        // try {
        //     } catch (\Throwable $th) {
    }

    public function updatestatus(Request $request) {
        $input = $request->all();

        Pendaftar::where('id', $input['id'])
            ->update([
                'status' => $input['status'],
                'berat_badan' => $input['berat_badan'],
                'tinggi_badan' => $input['tinggi_badan'],
                'buta_warna' => $input['buta_warna'],
            ]);
        return back()->with(['status' => 'Status berhasil diubah!', 'alert' => 'alert-success']);
    }

    public function cekstatus(Request $request) {
        $kode = $request->input('kode');
        return redirect(url("/status/$kode"));
    }

    public function status(Request $request, $kode) {
        try {
            $id = Hashids::decode($kode)[0];
            if ($pendaftar = Pendaftar::where('id', $id)->first()) {
                return view('status')->with(['pendaftar' => $pendaftar, 'kode' => $kode]);
            } else {
                return view('error')->with(['message' => 'Maaf, data tidak ditemukan']);
            }
        } catch (\Throwable $th) {
            return view('error')->with(['message' => 'Maaf, data tidak ditemukan']);
        }
    }

    public function cetak(Request $request, $kode) {
        try {
            $id = Hashids::decode($kode)[0];
            if ($pendaftar = Pendaftar::where('id', $id)->first()) {
                if (ob_get_contents()) {
                    ob_end_clean();
                }
                $pdf = PDF::loadview('form_pendaftaran', ['pendaftar' => $pendaftar, 'kode' => $kode]);
                return $pdf->stream('form_pendaftaran.pdf');
            } else {
                return view('error')->with(['message' => 'Maaf, data tidak ditemukan']);
            }
        } catch (\Throwable $th) {
            return view('error')->with(['message' => 'Maaf, data tidak ditemukan']);
        }
    }
    public function cetakexcel(Request $request) {
        return Excel::download(new PendaftarExport, 'data_pendaftar_diterima.xlsx');
    }

    public function suratpengumuman(Request $request, $kode) {
        try {
            $id = Hashids::decode($kode)[0];
        } catch (\Throwable $th) {
            return view('error')->with(['message' => 'Maaf, data tidak ditemukan']);
        }

        $pendaftar = Pendaftar::where('id', $id)->first();
        if (ob_get_contents()) {
            ob_end_clean();
        }
        $pdf = PDF::loadview('surat_pengumuman', ['pendaftar' => $pendaftar, 'kode' => $kode]);
        return $pdf->stream('surat_pengumuman.pdf');
    }

    public function uploadbuktipembayaran(Request $request) {
        request()->validate([
            'bukti_pembayaran' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $input = $request->all();
        $path = $request->bukti_pembayaran->store('images/bp', 'public');

        Pendaftar::where('id', $input['id'])
            ->update([
                'status' => 'Menunggu Validasi Pembayaran',
                'bukti_pembayaran' => $path,
            ]);

        return back();
    }
}
