@extends('layouts.app')

@section('title', 'Buat Laporan')

@section('content')
    <h2>Form Pelaporan Banjir</h2>

    <form action="{{ route('lapor.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="nama_pelapor">Nama Pelapor:</label>
            <input type="text" id="nama_pelapor" name="nama_pelapor" required>
        </div>

        <div class="form-group">
            <label for="lokasi">Lokasi Kejadian:</label>
            <input type="text" id="lokasi" name="lokasi" required>
        </div>

        <div class="form-group">
            <label for="tinggi_genangan">Tinggi Genangan (cm):</label>
            <input type="number" id="tinggi_genangan" name="tinggi_genangan" required>
        </div>
        <div class="form-group">
            <label for="tanggal_kejadian">Tanggal Kejadian:</label><br>
            <input type="date" id="tanggal_kejadian" name="tanggal_kejadian" class="form-control" required>
        </div>

        <button type="submit" class="btn" style="margin-top: 15px;">Kirim Laporan</button>
    </form>
@endsection
