<?php

namespace App\Exports;

use App\Pendaftar;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithTitle;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Events\AfterSheet;


class PendaftarJurusanExport implements FromCollection, WithTitle, ShouldAutoSize, WithHeadings, WithEvents
{

    protected $jurusanSingkatan;
    protected $jurusanLengkap;


    /**
    * @return \Illuminate\Support\Collection
    */

    public function __construct(string $jurusan)
    {
        if ($jurusan == 'OTKP') {
            $this->jurusanLengkap = 'Otomatisasi Tata Kelola Perkantoran';
        } elseif ($jurusan == 'MM') {
            $this->jurusanLengkap = 'Multimedia';
        } elseif ($jurusan == 'TKKR') {
            $this->jurusanLengkap = 'Tata Kelola Kecantikan Kulit dan Rambut';
        } elseif ($jurusan == 'KEP') {
            $this->jurusanLengkap = 'Keperawatan';
        }

        $this->jurusanSingkatan = $jurusan;
    }

    public function registerEvents(): array
    {
        return [
            AfterSheet::class    => function(AfterSheet $event) {
                $cellRange = 'A1:J1'; // All headers
                $event->sheet->getDelegate()->getStyle($cellRange)->getFont()->setSize(14);
                $event->sheet->getDelegate()->getStyle($cellRange)->getFont()->setBold('bold');
            },
        ];
    }

    public function collection()
    {
        return Pendaftar::select(
            'id',
            'nama_siswa',
            'jenis_kelamin',
            'tanggal_lahir',
            'nilai_uan',
            'nilai_bahasa_indonesia',
            'nilai_matematika',
            'nilai_bahasa_inggris',
            'nilai_ipa',
            'jurusan'
            )->where([
                'jurusan' => $this->jurusanLengkap,
                'status' => 'Diterima'
            ])->get();
    }
    
    public function title(): string
    {
        return $this->jurusanSingkatan;
    }


    public function headings(): array
    {
        return [
            "No. Pendaftaran",
            "Nama Siswa",
            "Jenis Kelamin",
            "Tanggal Lahir",
            "Nilai UAN",
            "Nilai Bahasa Indonesia",
            "Nilai Matematika",
            "Nilai Bahasa Inggris",
            "Nilai IPA",
            "Jurusan"
        ];
    }
}
