<?php

namespace App\Http\Controllers;

use PDF;
use App\Models\SuratMasuk;
use App\Models\SuratKeluar;
use Illuminate\Http\Request;

class PDFController extends Controller
{
    public function print_masuk(SuratMasuk $suratmasuk){
        $nourut = $suratmasuk->no_urut;
        $pdf = PDF::loadview('suratmasuk.suratmasukpdf',['suratmasuk'=>$suratmasuk]);
    	return $pdf->stream('Surat Masuk No.' . $nourut . '.pdf');
        
    }

    public function print_keluar(SuratKeluar $suratkeluar){
        $nourut = $suratkeluar->no_urut;
        $pdf = PDF::loadview('suratkeluar.suratkeluarpdf',['suratkeluar'=>$suratkeluar]);
        return $pdf->stream('Surat Keluar No.' . $nourut . '.pdf');
        
    }
}
