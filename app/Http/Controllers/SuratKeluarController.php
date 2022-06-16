<?php

namespace App\Http\Controllers;

use App\Models\KodePengarsipan;
use App\Models\SuratKeluar;
use Illuminate\Http\Request;

class SuratKeluarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $suratkeluar = SuratKeluar::filter(request(['search']));
        return view('suratkeluar.index',[
            'suratkeluar' => $suratkeluar->paginate(7)->withQueryString()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('suratkeluar.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if(SuratKeluar::count() < 1){
            $no_urut = 1;
        } else {
            $no_urut = SuratKeluar::latest()->get()[0]->no_urut;
            $no_urut += 1;
        }

        $validated = $request->validate([
            // 'perihal' => 'required',
            // 'kode' => 'required',
            'tanggal_surat' => 'required|date',
            'box' => 'required',
            'pengolah' => 'nullable',
            'lampiran' => 'required|numeric',
            'dari_kepada' => 'required',
            'isi_ringkas' => 'required',
            'catatan' => 'nullable'
        ]);

        // menambahkan index dan juga kode pengarsipan
        $kode = KodePengarsipan::where('kode_pengarsipan', $request->kode)->get();
        if($kode->count() >= 1){
            $validated['kode_pengarsipan_id'] = $kode[0]->id;
        } else {
            return redirect('/surat-keluar/create')->with('danger', 'Maaf, Nomor Index tidak ditemukan. <br>Silahkan Masukan No Index dalam Halaman Kode Pengarsipan!');
        }

        $validated['no_urut'] = $no_urut;

        // explode tanggal surat untuk menyamakan format pada database
        $tanggal_surat = explode("/",$validated['tanggal_surat']);
        $validated['tanggal_surat'] = $tanggal_surat[2] . "-" . $tanggal_surat[0] . "-" . $tanggal_surat[1];
        
        SuratKeluar::create($validated);
        
        return redirect('/surat-keluar')->with('success','Surat Baru telah ditambahkan!');        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SuratKeluar  $suratKeluar
     * @return \Illuminate\Http\Response
     */
    public function show(SuratKeluar $suratKeluar)
    {
        return view('suratkeluar.show', [
            'suratkeluar' => $suratKeluar
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SuratKeluar  $suratKeluar
     * @return \Illuminate\Http\Response
     */
    public function edit(SuratKeluar $suratKeluar)
    {
        return view('suratkeluar.edit', [
            'suratkeluar' => $suratKeluar
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\SuratKeluar  $suratKeluar
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SuratKeluar $suratKeluar)
    {
        $validated = $request->validate([
            // 'perihal' => 'required',
            // 'kode' => 'required',
            'tanggal_surat' => 'required|date',
            'box' => 'required',
            'pengolah' => 'nullable',
            'lampiran' => 'required|numeric',
            'dari_kepada' => 'required',
            'isi_ringkas' => 'required',
            'catatan' => 'nullable'
        ]);

        // memeriksa apakah kode surat berbeda
        if($suratKeluar->kode_pengarsipan->kode_pengarsipan != $request->kode){
            // menambahkan index dan juga kode pengarsipan
            $kode = KodePengarsipan::where('kode_pengarsipan', $request->kode)->get();
            if($kode->count() >= 1){
                $validated['kode_pengarsipan_id'] = $kode[0]->id;
            } else {
                $redirect = '/surat-keluar/' . $request->id . '/edit';
                return redirect($redirect)->with('danger', 'Maaf, Nomor Index tidak ditemukan. <br>Silahkan Masukan No Index dalam Halaman Kode Pengarsipan!');
            }
        }

        if($request->tanggal_surat != $suratKeluar->tanggal_surat){
            // explode tanggal surat untuk menyamakan format pada database
            $tanggal_surat = explode("/",$validated['tanggal_surat']);
            $validated['tanggal_surat'] = $tanggal_surat[2] . "-" . $tanggal_surat[0] . "-" . $tanggal_surat[1];
        } 

        SuratKeluar::where('id', $suratKeluar->id )->update($validated);
        return redirect('/surat-keluar')->with('success','Surat Telah ter Updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SuratKeluar  $suratKeluar
     * @return \Illuminate\Http\Response
     */
    public function destroy(SuratKeluar $suratKeluar)
    {
        SuratKeluar::destroy($suratKeluar->id);
        return redirect('/surat-keluar')->with('success','Surat terkait telah dihapus');
    }
}
