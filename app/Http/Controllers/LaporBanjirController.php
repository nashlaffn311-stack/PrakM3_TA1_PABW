<?php

namespace App\Http\Controllers;
use App\Models\Laporan;
use Illuminate\Http\Request;

class LaporBanjirController extends Controller
{
    // Halaman daftar laporan (Mengambil seluruh data dari DB)
    public function index()
    {
        $laporan = Laporan::all();
        return view('lapor.index', compact('laporan'));
    }
    // Halaman Form Pelaporan
    public function create()
    {
        return view('lapor.create');
    }

    // Menyimpan data form ke DB
    public function store(Request $request)
    {
        $request->validate([
            'nama_pelapor' => 'required|string|max:255',
            'lokasi' => 'required|string|max:255',
            'tinggi_genangan' => 'required|numeric',
            'tanggal_kejadian' => 'required|date',
        ]);

        $laporan = Laporan::create([
            'nama_pelapor' => $request->nama_pelapor,
            'lokasi' => $request->lokasi,
            'tinggi_genangan' => $request->tinggi_genangan,
            'tanggal_kejadian' => $request->tanggal_kejadian,
        ]);

        return view('lapor.konfirmasi', compact('laporan'));
    }
}
