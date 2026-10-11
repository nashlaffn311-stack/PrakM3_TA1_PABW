@extends('layouts.app')

@section('title', 'Daftar Laporan Banjir')

@section('content')
    <h2>Daftar Laporan Kejadian Banjir</h2>

    <div class="laporan-grid">
        @forelse ($laporan as $laporan)
            @include('partials.laporan-card', ['laporan' => $laporan])
        @empty
            <p>Belum ada laporan banjir yang terdaftar.</p>
        @endforelse
    </div>
@endsection

