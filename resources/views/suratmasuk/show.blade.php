@extends('layout.layout')

@section('container')

<div class="mb-2">
  <a href="/surat-masuk" class="btn btn-danger btn-sm">Kembali</a>
  <div class="row">
    <div class="col-4 text-end">
      <img src="/img/Surat.png" alt="" style="width: 70%; align:right;">
    </div>
    <div class="col text-start">
      <h1 class="align-middle"><strong>Detail Surat Masuk</strong></h1>
      <p class="lead">Tolong perhatikan baik - baik setiap informasi pada surat dan pastikan surat sudah memiliki data yang benar</p>
      <a href="/surat-masuk/{{ $suratmasuk->id }}/pdf" class="btn btn-primary">Print Surat</a>
      <a href="/surat-masuk/{{ $suratmasuk->id }}/edit" class="btn btn-warning">Edit Surat</a>
      <form action="/surat-masuk/{{ $suratmasuk->id }}" method="POST" class="d-inline">
        @method('delete')
        @csrf
        <button class="btn btn-danger" type="submit" onclick="return confirm('Kamu yakin?')">
          Hapus
        </button>
      </form> 
    </div>
  </div>
</div>

<table class="table table-bordered table-striped table-hover">
    <thead>
      <tr>
        <th scope="col" colspan="4">Detail Surat Masuk</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row">Kode</th>
        <td>{{ $suratmasuk->kode_pengarsipan->kode_pengarsipan }}</td>
        <th scope="row">Index</th>
        <td scope="col">{{ $suratmasuk->kode_pengarsipan->index }}</td>
      </tr>
      <tr>
        <th scope="row">No Urut</th>
        <td>{{ $suratmasuk->no_urut }}</td>
        <th scope="row">No Surat</th>
        <td>{{ $suratmasuk->no_surat }}</td>
      </tr>
      <tr>
        <th scope="row">Box</th>
        <td>{{ $suratmasuk->box == NULL ? '-' : $suratmasuk->box }}</td>
        <th scope="row">Tanggal Surat</th>
        <td>{{ $suratmasuk->tanggal_surat }}</td>
      </tr>
      <tr>
        <th scope="row">Pengolah</th>
        <td>{{ $suratmasuk->pengolah }}</td>
        <th scope="row">Tanggal Diteruskan</th>
        <td>{{ $suratmasuk->tanggal_diteruskan }}</td>
      </tr>
      <tr>
        <th scope="row">Jumlah Lampiran</th>
        <td>{{ $suratmasuk->lampiran }} Lembar</td>
        <th scope="row">Tanda Diterima</th>
        <td>{{ $suratmasuk->tanda_diterima }}</td>
      </tr>
      <tr>
        <th scope="row">Dari</th>
        <td scope="col" colspan="3">{{ $suratmasuk->dari_kepada }}</td>
      </tr>
      <tr>
        <th scope="row">Isi Ringkas</th>
        <td scope="col" colspan="3">{{ $suratmasuk->isi_ringkas }}</td>
      </tr>
      <tr>
        <th scope="row">Catatan</th>
        <td scope="col" colspan="3">{{ $suratmasuk->catatan }}</td>
      </tr>
    </tbody>
  </table>
@endsection