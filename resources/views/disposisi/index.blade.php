@extends('layout.layout')

@section('container')

@if(session()->has('success'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
  {{ session('success') }}
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>    
@endif

<div class="my-5">
    <h1 class="text-center"><strong>Cek Lembar Disposisi!</strong></h1>
    <p class="lead text-center">Cek semua lembar disposisi yang telah di input di halaman ini!</p>
</div>

<form action="/disposisi">
  <div class="row justify-content-md-center">
    <div class="col-5">
        <div class="input-group mb-4">
            <input type="text" class="form-control" placeholder="Cari Nomor Urut" name="search" value="{{ request('search') }}">
            <button class="btn btn-outline-secondary" type="submit" id="button-addon2"><span data-feather="search"></span></button>
        </div>
    </div>
  </div>
</form>


@if ($disposisi->count() > 0)
  <div>
    <a href="/disposisi/create" class="btn btn-primary mb-3">
      + Tambah Lembar Disposisi
    </a>
  </div>

  <table class="table table-striped table-hover">
    <thead>
      <tr>
        <th scope="col">No. Urut</th>
        <th scope="col">No. Agenda</th>
        <th scope="col">Dari</th>
        <th scope="col">Tanggal Surat</th>
        <th scope="col">Aksi</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($disposisi as $dp)
      <tr>
        <th>{{ $dp->no_urut }}</th>
        <td>{{ $dp->no_agenda }}</td>
        <td>{{ $dp->dari }}</td>
        <td>{{ $dp->tanggal_disposisi }}</td>
        <td> 
          <a href="/disposisi/{{ $dp->id }}" class="btn btn-sm btn-primary">Detail</a> 
          <a href="/disposisi/{{ $dp->id }}/edit" class="btn btn-sm btn-warning">Edit</a>  
          <form action="/disposisi/{{ $dp->id }}" method="POST" class="d-inline">
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
      <p class="lead">Lembar Disposisi yang kamu cari gaada nih.. <br>Coba diperhatikan lagi kata kuncinya ya! <br>Atau membuat surat baru</p>
      <div>
        <a href="/disposisi/create" class="btn btn-primary mb-3">
          + Tambah Lembar Disposi
        </a>
      </div>
    </div>
@endif


  <div class="d-flex justify-content-center">
    {{ $disposisi->links() }}
</div>
@endsection