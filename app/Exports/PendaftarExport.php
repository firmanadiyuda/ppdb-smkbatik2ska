<?php

namespace App\Exports;

use App\Pendaftar;
// use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\Exportable;
// use Maatwebsite\Excel\Concerns\WithHeadings;
// use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithMultipleSheets;


class PendaftarExport implements WithMultipleSheets
{

    use Exportable;

    public function sheets(): array
    {
        $sheets = [];

        $sheets[] = new PendaftarJurusanExport('OTKP');
        $sheets[] = new PendaftarJurusanExport('MM');
        $sheets[] = new PendaftarJurusanExport('TKKR');
        $sheets[] = new PendaftarJurusanExport('KEP');


        return $sheets;
    }
}
