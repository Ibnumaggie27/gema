@extends('layouts.backend.app')
@section('content')
<div class="container">
    <h1>Pengaturan Visibilitas Halaman</h1>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <form action="{{ route('backend.setting.update') }}" method="POST">
        @csrf
        <div class="form-check">
            <input type="checkbox" name="beranda" id="beranda" class="form-check-input" {{ $settings->beranda ? 'checked' : '' }}>
            <label class="form-check-label" for="beranda">Tampilkan Beranda</label>
        </div>

        <div class="form-check">
            <input type="checkbox" name="nilai" id="nilai" class="form-check-input" {{ $settings->nilai ? 'checked' : '' }}>
            <label class="form-check-label" for="nilai">Tampilkan Nilai</label>
        </div>

        <div class="form-check">
            <input type="checkbox" name="nilaiakhir" id="nilaiakhir" class="form-check-input" {{ $settings->nilaiakhir ? 'checked' : '' }}>
            <label class="form-check-label" for="nilaiakhir">Tampilkan Nilai Akhir</label>
        </div>

        <button type="submit" class="btn btn-primary mt-3">Simpan Pengaturan</button>
    </form>
</div>
@endsection