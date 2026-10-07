@extends('layouts.app')

@section('title', 'Daftar Laporan Banjir')

@section('content')
    <h2>Daftar Laporan Kejadian Banjir</h2>

    @forelse($laporanList as $laporan)
        @include('partials.laporan-card', ['laporan' => $laporan])
    @empty
        <p>Belum ada laporan banjir yang terdaftar.</p>
    @endforelse
@endsection