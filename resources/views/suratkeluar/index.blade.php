@extends('layout.layout')

@section('container')

@if(session()->has('success'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
  {{ session('success') }}
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>    
@endif

<div class="my-5">
    <h1 class="text-center"><strong>Cek Surat keluar!</strong></h1>
    <p class="lead text-center">Cek semua surat keluar yang telah di input di halaman ini!</p>
</div>

<form action="/surat-keluar">
  <div class="row justify-content-md-center">
    <div class="col-5">
        <div class="input-group mb-4">
            <input type="text" class="form-control" placeholder="Cari Nomor Urut" name="search" value="{{ request('search') }}">
            <button class="btn btn-outline-secondary" type="submit" id="button-addon2"><span data-feather="search"></span></button>
        </div>
    </div>
  </div>
</form>


@if ($suratkeluar->count() > 0)
  <div>
    <a href="/surat-keluar/create" class="btn btn-primary mb-3">
      + Tambah Surat keluar
    </a>
  </div>

  <table class="table table-striped table-hover">
    <thead>
      <tr>
        <th scope="col">No Urut</th>
        <th scope="col">Index</th>
        <th scope="col">Kode</th>
        <th scope="col">Tanggal</th>
        <th scope="col">Aksi</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($suratkeluar as $surat)
      <tr>
        <th>{{ $surat->no_urut }}</th>
        <th>{{ $surat->kode_pengarsipan->index }}</th>
        <td>{{ $surat->kode_pengarsipan->kode_pengarsipan }}</td>
        <td>{{ $surat->tanggal_surat }}</td>
        <td> 
          <a href="/surat-keluar/{{ $surat->id }}" class="btn btn-sm btn-primary">Detail</a> 
          <a href="/surat-keluar/{{ $surat->id }}/edit" class="btn btn-sm btn-warning">Edit</a>  
          <form action="/surat-keluar/{{ $surat->id }}" method="POST" class="d-inline">
            @method('delete')
            @csrf
            <button class="btn btn-sm btn-danger" type="submit" onclick="return confirm('Kamu yakin?')">
              Hapus
            </button>
          </form> 
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
        <a href="/surat-keluar/create" class="btn btn-primary mb-3">
          + Tambah Surat keluar
        </a>
      </div>
    </div>
@endif

    <div class="mt-3"></div>
  <div class="d-flex justify-content-center">
    {{ $suratkeluar->links() }}
</div>
@endsection