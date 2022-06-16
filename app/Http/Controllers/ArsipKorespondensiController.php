<?php

namespace App\Http\Controllers;

use App\Models\SuratKeluar;
use Illuminate\Http\Request;
use PDF;

class ArsipKorespondensiController extends Controller
{
    public function index(){
        return view('arsipkorespondensi.index');
    }

    public function print(Request $request){
        $validated = $request->validate([
            'bulan' => 'required',
            'tahun' => 'required|numeric'
        ]);

        if ($validated['bulan'] == '01') {
            $namaBulan = 'Januari';
        } else if ($validated['bulan'] == '02') {
            $namaBulan = 'Februari';
        } else if ($validated['bulan'] == '03') {
            $namaBulan = 'Maret';
        } else if ($validated['bulan'] == '04') {
            $namaBulan = 'April';
        } else if ($validated['bulan'] == '05') {
            $namaBulan = 'Mei';
        } else if ($validated['bulan'] == '06') {
            $namaBulan = 'Juni';
        } else if ($validated['bulan'] == '07') {
            $namaBulan = 'Juli';
        } else if ($validated['bulan'] == '08') {
            $namaBulan = 'Agustus';
        } else if ($validated['bulan'] == '09') {
            $namaBulan = 'September';
        } else if ($validated['bulan'] == '10') {
            $namaBulan = 'Oktober';
        } else if ($validated['bulan'] == '11') {
            $namaBulan = 'November';
        } else if ($validated['bulan'] == '12') {
            $namaBulan = 'Desember';
        }

        $arsipkorespondensi = SuratKeluar::whereYear('tanggal_surat', '=', $validated['tahun'])
                        ->whereMonth('tanggal_surat', '=', $validated['bulan'])
                        ->get();

        $pdf = PDF::loadview('arsipkorespondensi.arsipkorespondensipdf',[
            'arsipkorespondensi'=>$arsipkorespondensi,
            'namaBulan' => $namaBulan,
            'tahun' => $validated['tahun']
        ]);
        return $pdf->stream('Arsip Korespondensi Bulan ' . $validated['bulan'] . ' Tahun ' . $validated['tahun'] . '.pdf');
        
    }
}
