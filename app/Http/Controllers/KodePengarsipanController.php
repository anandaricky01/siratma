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
        $validated = $request->validate([
            'kode_pengarsipan' => 'required',
            'kode_pengarsipan_titik' => 'required',
            'index' => 'required'
        ]);
        KodePengarsipan::create($validated);
        return redirect('/kode')->with('success', 'Kode Berhasil Ditambahkan!');
    }
}
