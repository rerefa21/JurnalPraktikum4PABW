@extends('layouts.app')

@section('title', 'Buat Laporan Banjir')

@section('content')
    <h2>Form Lapor Kejadian Banjir</h2>

    <form action="{{ route('lapor.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="nama">Nama Pelapor:</label>
            <input type="text" id="nama" name="nama" required placeholder="Masukkan nama lengkap">
        </div>

        <div class="form-group">
            <label for="lokasi">Lokasi Kejadian:</label>
            <input type="text" id="lokasi" name="lokasi" required placeholder="Contoh: Desa Dayeuhkolot RT 01/03">
        </div>

        <div class="form-group">
            <label for="tinggi_air">Tinggi Genangan Air (cm):</label>
            <input type="number" id="tinggi_air" name="tinggi_air" required placeholder="Masukkan ketinggian air dalam cm">
        </div>

        <button type="submit" class="btn">Kirim Laporan</button>
    </form>
@endsection



