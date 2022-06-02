@extends('layout.layout')

@section('container')
    <div class="text-center mt-5">
        <h1>Input Kode Pengarsipan</h1>
        <div class="mb-5">
            @if(session()->has('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>    
            @endif
        </div>
        <form action="/kode" method="POST">
            @csrf
            <div class="row justify-content-md-center">
                <div class="col-3">
                    <div class="mb-3">
                        <input type="text" id="kode_pengarsipan" class="form-control @error('kode_pengarsipan') is-invalid @enderror" placeholder="Kode Pengarsipan" name="kode_pengarsipan" value="{{ old('kode_pengarsipan') }}">
                        @error('kode_pengarsipan')
                                <div class="invalid-feedback">
                                {{ $message }}
                                </div>
                        @enderror
                    </div>
                </div>
                <div class="col-3">
                    <div class="mb-3">
                        <input type="text" id="index" class="form-control @error('index') is-invalid @enderror" placeholder="Index" name="index" value="{{ old('index') }}">
                        @error('index')
                                <div class="invalid-feedback">
                                {{ $message }}
                                </div>
                        @enderror
                    </div>
                </div>
                <div class="col-2">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </form>

        {{-- Untuk Lihat Lihat --}}
        @if ($kode_pengarsipan->count() > 0)
            <div class="mt-3 mb-3">
                <h3>List Kode Pengarsipan</h3>
            </div>
            <div class="row">
                @foreach ($kode_pengarsipan as $kode)
                        <div class="col-6">
                            <ul class="list-group">
                                <li class="list-group-item">{{ $kode->kode_pengarsipan }}</li>
                            </ul>
                        </div>
                        <div class="col-6">
                            <ul class="list-group">
                                <li class="list-group-item">{{ $kode->index}}</li>
                            </ul>
                        </div>
                @endforeach
            </div>

            <div class="mt-3"></div>
            <div class="d-flex justify-content-center">
                {{ $kode_pengarsipan->links() }}
            </div>
        @else
            <div class="mt-5 mb-3 border rounded py-5">
                <img src="/img/surat kosong.png" alt="" width="30%">
                <h1>Wah Masih Kosong Nih</h1>
                <h5>Yuk isi dulu!</h5>
            </div>
        @endif
        
    </div>
    
@endsection