<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pendaftar;
use PDF;
use Hashids;
use KubAT\PhpSimple\HtmlDomParser;
use App\Exports\PendaftarExport;
use Maatwebsite\Excel\Facades\Excel;


class ProsesDataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function proses(Request $request)
    {

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

    public function cari(Request $request)
    {
        $input = $request->all();
        
        $kode = Hashids::decode($input['search']);
        
        if($pendaftar = Pendaftar::where('id', $kode)->first()){

            return back()->with([
                'status'=> 'Data ditemukan!',
                'alert' => 'alert-success',
                'pendaftar' => $pendaftar
                ]);
        } else {

            return back()->with([
                    'status'=> 'Data tidak ditemukan!',
                    'alert' => 'alert-danger'
                    ]);
            }            
        
        // try {
        //     } catch (\Throwable $th) {


    }

    public function updatestatus(Request $request)
    {
        $input = $request->all();

        Pendaftar::where('id', $input['id'])
          ->update([
              'status' => $input['status'],
              'berat_badan' => $input['berat_badan'],
              'tinggi_badan' => $input['tinggi_badan'],
              'buta_warna' => $input['buta_warna']
            ]);
          return back()->with(['status'=> 'Status berhasil diubah!', 'alert' => 'alert-success']);
    }

    public function cekstatus(Request $request)
    {
        $kode = $request->input('kode');
        return redirect(url("/status/$kode"));
    }

    public function status(Request $request, $kode)
    {
        try {
            $id = Hashids::decode($kode)[0];
        } catch (\Throwable $th) {
            return view('error')->with(['message' => 'Maaf, data tidak ditemukan']);
        }
        
        $pendaftar = Pendaftar::where('id', $id)->first();
        return view('status')->with(['pendaftar' => $pendaftar, 'kode' => $kode]);
    }

    public function cetak(Request $request, $kode)
    {
        try {
            $id = Hashids::decode($kode)[0];
        } catch (\Throwable $th) {
            return view('error')->with(['message' => 'Maaf, data tidak ditemukan']);
        }

        $pendaftar = Pendaftar::where('id', $id)->first();
        ob_end_clean();
        $pdf = PDF::loadview('form_pendaftaran',['pendaftar'=>$pendaftar, 'kode' => $kode]);
        return $pdf->stream('form_pendaftaran.pdf');
    }
    public function cetakexcel(Request $request)
    {
        return Excel::download(new PendaftarExport, 'data_pendaftar_diterima.xlsx');
    }


    public function suratpengumuman(Request $request, $kode)
    {
        try {
            $id = Hashids::decode($kode)[0];
        } catch (\Throwable $th) {
            return view('error')->with(['message' => 'Maaf, data tidak ditemukan']);
        }

        $pendaftar = Pendaftar::where('id', $id)->first();
        ob_end_clean();
        $pdf = PDF::loadview('surat_pengumuman',['pendaftar'=>$pendaftar, 'kode' => $kode]);
        return $pdf->stream('surat_pengumuman.pdf');
    }

    public function uploadbuktipembayaran(Request $request)
    {
        request()->validate([
            'bukti_pembayaran' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ]);
        
        $input = $request->all();
        $path = $request->bukti_pembayaran->store('images/bp', 'public');

        Pendaftar::where('id', $input['id'])
        ->update([
            'status' => 'Menunggu Validasi Pembayaran',
            'bukti_pembayaran' => $path
          ]);
        
        return back();
    }

}
