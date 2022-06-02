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
        $kode_pengarsipan = KodePengarsipan::all('kode_pengarsipan')->where('kode_pengarsipan',$request->kode_pengarsipan);
        $validated = $request->validate([
            'kode_pengarsipan' => 'required',
            'index' => 'required'
        ]);

        if($kode_pengarsipan === $validated['kode_pengarsipan']){
            return redirect('/kode')->with('danger', 'Kode Pengarsipan Sudah Ada!');
        }

        KodePengarsipan::create($validated);
        return redirect('/kode')->with('success', 'Kode Berhasil Ditambahkan!');
    }
}
