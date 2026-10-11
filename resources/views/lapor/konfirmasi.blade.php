@extends('layouts.app')
@section('title', 'Konfirmasi Laporan')

@section('content')
    <x-alert type="success" message="Laporan banjir Anda berhasil disimpan" />
    <h2>Detail Konfirmasi Laporan</h2>
    <div class="card">
        <p><strong>Nama Pelapor:</strong> {{ $laporan->nama_pelapor }}</p>
        <p><strong>Lokasi Kejadian:</strong> {{ $laporan->lokasi }}</p>
        <p><strong>Tinggi Genangan:</strong> {{ $laporan->tinggi_genangan }} cm</p>
        <p><strong>Tanggal Kejadian:</strong> {{ $laporan->tanggal_kejadian }}</p>
        <p><strong>Status Genangan:</strong>
            @if($laporan->tinggi_genangan < 30)
                <span class="status bg-waspada">Waspada</span>
            @elseif($laporan->tinggi_genangan >= 30 && $laporan->tinggi_genangan <= 70)
                <span class="status bg-siaga">Siaga</span>
            @else
                <span class="status bg-awas">Awas</span>
            @endif
        </p>
    </div>
    <a href="{{ route('lapor.index') }}" class="btn">Kembali ke Daftar Laporan</a>
@endsection
