@extends('layout.layout')

@section('container')
<div class="my-5">
    <h1 class="text-center"><strong>Daftar Arsip Aktif</strong></h1>
    <p class="lead text-center">Cek semua Arsip Aktif yang telah di input di halaman ini!</p>
</div>

@if ($arsipaktif->count() > 0)
<table class="table table-striped table-hover">
    <thead>
        <tr>
            <th scope="col">No</th>
            <th scope="col">No.Box</th>
            <th scope="col">Kode</th>
            <th scope="col">Index</th>
            <th scope="col">Uraian Masalah</th>
            <th scope="col">Tahun</th>
            <th scope="col">Aksi</th>
        </tr>
        </thead>
        <tbody>
            @foreach ($arsipaktif as $arsip)
            <tr>
                <th scope="row">{{ $arsip->no_urut }}</th>
                <td>{!! $arsip->box == NULL ? '<p style="color: rgb(175, 175, 175)">Kosong</p>' : $arsip->box !!}</td>
                <td>{{ strtoupper($arsip->kode) }}</td>
                <td>{{ $arsip->perihal }}</td>
                <td>{{ $arsip->isi_ringkas }}</td>
                @php
                    $tahun = explode("-",$arsip->tanggal_surat);
                @endphp
                <td>{!! $tahun[0] !!}</td>
                <td>
                    <a href="/surat-masuk/{{ $arsip->id }}" class="btn btn-sm btn-primary">Detail</a> 
                    
                </td>
            </tr>
            @endforeach
        </tbody>
</table>
@else 
<div class="text-center">
    <img src="/img/surat kosong.png" alt="" width="30%">
    <h2><Strong>Waduh!</Strong></h2>
    <p class="lead">Surat yang kamu cari gaada nih.. <br>Coba diperhatikan lagi kata kuncinya ya! <br>Atau membuat surat baru</p>
    <div>
      <a href="/surat-masuk/create" class="btn btn-primary mb-3">
        + Tambah Surat Masuk
      </a>
    </div>
  </div>
@endif

<div class="d-flex justify-content-center">
    {{ $arsipaktif->links() }}
</div>
@endsection