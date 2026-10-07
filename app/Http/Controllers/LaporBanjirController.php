<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LaporBanjirController extends Controller
{
    // Halaman Form Pelaporan
    public function create()
    {
        return view('lapor.create');
    }

    // Proses Kirim Form dan Halaman Konfirmasi
    public function store(Request $request)
    {
        $data = [
            'nama_pelapor' => $request->input('nama_pelapor', 'Anonim'),
            'lokasi' => $request->input('lokasi', 'Tidak Diketahui'),
            'tinggi_air' => $request->input('tinggi_air', 0),
        ];

        return view('lapor.konfirmasi', compact('data'));
    }

    // Halaman Daftar Laporan (Data Array Dummy)
    public function index()
    {
        $laporanList = [
            [
                'nama_pelapor' => 'Budi Santoso',
                'lokasi' => 'Dayeuhkolot',
                'tinggi_air' => 25,
            ],
            [
                'nama_pelapor' => 'Siti Aminah',
                'lokasi' => 'Baleendah',
                'tinggi_air' => 50,
            ],
            [
                'nama_pelapor' => 'Ahmad Fauzi',
                'lokasi' => 'Bojongsoang',
                'tinggi_air' => 85,
            ],
        ];

        return view('lapor.index', compact('laporanList'));
    }
}