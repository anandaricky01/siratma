<?php

namespace App\Http\Controllers;

use App\Models\Disposisi;
use Illuminate\Http\Request;

class DisposisiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $disposisi = Disposisi::filter(request(['search']));;
        return view('disposisi.index', [
            'disposisi' => $disposisi->paginate(7)->withQueryString()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('disposisi.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if(Disposisi::count() < 1){
            $no_urut = 1;
        } else {
            $no_urut = Disposisi::latest()->get()[0]->no_urut;
            $no_urut += 1;
        }

        $validated = $request->validate([
            'no_agenda' => 'nullable',
            'no_surat' => 'required',
            'dari' => 'required',
            'tanggal_disposisi' => 'date|required',
            'diterima_tanggal' => 'date|required',
            'perihal' => 'required|max:255',
            'sifat' => 'required'
        ]);

        $validated['no_urut'] = $no_urut;

        // explode tanggal surat untuk menyamakan format pada database
        $tanggal_disposisi = explode("/",$validated['tanggal_disposisi']);
        $validated['tanggal_disposisi'] = $tanggal_disposisi[2] . "-" . $tanggal_disposisi[0] . "-" . $tanggal_disposisi[1];

        // explode tanggal surat untuk menyamakan format pada database
        $diterima_tanggal = explode("/",$validated['diterima_tanggal']);
        $validated['diterima_tanggal'] = $diterima_tanggal[2] . "-" . $diterima_tanggal[0] . "-" . $diterima_tanggal[1];

        Disposisi::create($validated);

        return redirect('/disposisi')->with('success','Lembar Disposisi Baru telah ditambahkan!');        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Disposisi $disposisi)
    {
        return view('disposisi.show',[
            'disposisi' => $disposisi
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Disposisi $disposisi)
    {
        return view('disposisi.edit',[
            'disposisi' => $disposisi
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Disposisi $disposisi)
    {
        $validated = $request->validate([
            'no_agenda' => 'nullable',
            'no_surat' => 'required',
            'dari' => 'required',
            'tanggal_disposisi' => 'date|required',
            'diterima_tanggal' => 'date|required',
            'perihal' => 'required|max:255',
            'sifat' => 'required'
        ]);

        if($request->tanggal_disposisi != $disposisi->tanggal_disposisi){
            $tanggal_disposisi = explode("/",$validated['tanggal_disposisi']);
            $validated['tanggal_disposisi'] = $tanggal_disposisi[2] . "-" . $tanggal_disposisi[0] . "-" . $tanggal_disposisi[1];
        }

        if ($request->diterima_tanggal != $disposisi->diterima_tanggal) {
            $diterima_tanggal = explode("/",$validated['diterima_tanggal']);
            $validated['diterima_tanggal'] = $diterima_tanggal[2] . "-" . $diterima_tanggal[0] . "-" . $diterima_tanggal[1];
        }

        Disposisi::where('id', $disposisi->id)->update($validated);
        return redirect('/disposisi')->with('success','Disposisi Telah ter Updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Disposisi $disposisi)
    {
        Disposisi::destroy($disposisi->id);
        return redirect('/disposisi')->with('success','Lembar Disposisi terkait telah dihapus');
    }
}
