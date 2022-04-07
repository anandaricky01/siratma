<?php

namespace App\Http\Controllers;

use App\Models\SuratMasuk;
use Illuminate\Http\Request;

class SuratMasukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $suratmasuk = SuratMasuk::filter(request(['search']));
        return view('suratmasuk.index',[
            'suratmasuk' => $suratmasuk->paginate(7)->withQueryString()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('suratmasuk.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        if(SuratMasuk::count() < 1){
            $no_urut = 1;
        } else {
            $no_urut = SuratMasuk::latest()->get()[0]->no_urut;
            $no_urut += 1;
        }

        $validated = $request->validate([
            'no_surat' => 'nullable',
            'perihal' => 'required',
            'kode' => 'required',
            'tanggal_surat' => 'required|date',
            'pengolah' => 'required',
            'tanggal_diteruskan' => 'required|date',
            'lampiran' => 'required|numeric',
            'dari_kepada' => 'required',
            'tanda_diterima' => 'required',
            'isi_ringkas' => 'required',
            'catatan' => 'required'
        ]);

        $validated['no_urut'] = $no_urut;

        // explode tanggal surat untuk menyamakan format pada database
        $tanggal_surat = explode("/",$validated['tanggal_surat']);
        $validated['tanggal_surat'] = $tanggal_surat[2] . "-" . $tanggal_surat[0] . "-" . $tanggal_surat[1];
        
        $tanggal_diteruskan = explode("/",$validated['tanggal_diteruskan']);
        $validated['tanggal_diteruskan'] = $tanggal_diteruskan[2] . "-" . $tanggal_diteruskan[0] . "-" . $tanggal_diteruskan[1];
        
        SuratMasuk::create($validated);
        
        return redirect('/surat-masuk')->with('success','Surat Baru telah ditambahkan!');        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SuratMasuk  $suratMasuk
     * @return \Illuminate\Http\Response
     */
    public function show(SuratMasuk $suratMasuk)
    {
        return view('suratmasuk.show',[
            'suratmasuk' => $suratMasuk
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SuratMasuk  $suratMasuk
     * @return \Illuminate\Http\Response
     */
    public function edit(SuratMasuk $suratMasuk)
    {
        return view('suratmasuk.edit', [
            'suratmasuk' => $suratMasuk
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\SuratMasuk  $suratMasuk
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SuratMasuk $suratMasuk)
    {
        $validated = $request->validate([
            'no_surat' => 'nullable',
            'kode' => 'required',
            'perihal' => 'required',
            'tanggal_surat' => 'required|date',
            'pengolah' => 'required',
            'tanggal_diteruskan' => 'required|date',
            'lampiran' => 'required|numeric',
            'dari_kepada' => 'required',
            'tanda_diterima' => 'required',
            'isi_ringkas' => 'required',
            'catatan' => 'required'
        ]);

        if($request->tanggal_surat != $suratMasuk->tanggal_surat){
            // explode tanggal surat untuk menyamakan format pada database
            $tanggal_surat = explode("/",$validated['tanggal_surat']);
            $validated['tanggal_surat'] = $tanggal_surat[2] . "-" . $tanggal_surat[0] . "-" . $tanggal_surat[1];
        } 

        if ($request->tanggal_diteruskan != $suratMasuk->tanggal_diteruskan) {
            $tanggal_diteruskan = explode("/",$validated['tanggal_diteruskan']);
            $validated['tanggal_diteruskan'] = $tanggal_diteruskan[2] . "-" . $tanggal_diteruskan[0] . "-" . $tanggal_diteruskan[1];
        } 

        SuratMasuk::where('id', $suratMasuk->id )->update($validated);
        return redirect('/surat-masuk')->with('success','Surat Telah ter Updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SuratMasuk  $suratMasuk
     * @return \Illuminate\Http\Response
     */
    public function destroy(SuratMasuk $suratMasuk)
    {
        SuratMasuk::destroy($suratMasuk->id);
        return redirect('/surat-masuk')->with('success','Surat terkait telah dihapus');
    }
}
