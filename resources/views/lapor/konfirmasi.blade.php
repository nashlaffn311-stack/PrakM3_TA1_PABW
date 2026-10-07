@extends('layouts.app')

@section('title', 'Konfirmasi Laporan')

@section('content')
    <x-alert type="success" message="Laporan banjir Anda berhasil dikirim ke sistem BPBD!" />

    <h2>Detail Konfirmasi Laporan</h2>

    <div class="card">
        <p><strong>Nama Pelapor:</strong> {{ $data['nama_pelapor'] }}</p>
        <p><strong>Lokasi Kejadian:</strong> {{ $data['lokasi'] }}</p>
        <p><strong>Tinggi Genangan Air:</strong> {{ $data['tinggi_air'] }} cm</p>
        <p><strong>Status Level:</strong>
            @if($data['tinggi_air'] < 30)
                <span class="status bg-waspada">Waspada</span>
            @elseif($data['tinggi_air'] >= 30 && $data['tinggi_air'] <= 70)
                <span class="status bg-siaga">Siaga</span>
            @else
                <span class="status bg-awas">Awas</span>
            @endif
        </p>
    </div>

    <a href="{{ route('lapor.index') }}" class="btn">Kembali ke Daftar Laporan</a>
@endsection