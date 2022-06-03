<?php

namespace App\Http\Controllers;

use App\Models\KodePengarsipan;
use Illuminate\Http\Request;

class KodePengarsipanController extends Controller
{
    public function index(){
        $kode_pengarsipan = KodePengarsipan::latest()->paginate(7)->withQueryString();
        return view('kode', ['kode_pengarsipan' => $kode_pengarsipan]);
    }

   public function store(Request $request){
        $kode_pengarsipan = KodePengarsipan::where('kode_pengarsipan',$request->kode_pengarsipan)->get()[0];
        // check kode \/
        if($kode_pengarsipan->kode_pengarsipan == $request->kode_pengarsipan){
            // dd("sudah ada");
            $isi = "kode pengarsipan sudah ada! <br>" . $kode_pengarsipan->kode_pengarsipan . " - " . $kode_pengarsipan->index;
            return redirect('/kode')->with('danger', $isi);
        }
        // cek kode ^
        
        $validated = $request->validate([
            'kode_pengarsipan' => 'required',
            'index' => 'required'
        ]);

        KodePengarsipan::create($validated);
        return redirect('/kode')->with('success', 'Kode Berhasil Ditambahkan!');
    }
}