<?php

namespace App\Http\Controllers;

use App\Absenkehadiran;
use App\Absenpiket;
use App\Kumpul;
use App\Piket;

class PenggunaController extends Controller
{
    public function jadwal_piket()
    {
        return view('pengguna.jadwal_piket', [
            'nomor' => 1,
            'pikets' => Piket::get()
        ]);
    }

    public function jadwal_kumpul()
    {
        return view('pengguna.jadwal_kumpul', [
            'nomor' => 1,
            'kumpuls' => Kumpul::get()
        ]);
    }

    public function absen_piket()
    {
        return view('pengguna.absen_piket', [
            'nomor' => 1,
            'absenpikets' => Absenpiket::get()
        ]);
    }

    public function absen_rayon()
    {
        return view('pengguna.absen_rayon', [
            'nomor' => 1,
            'absenrayons' => Absenkehadiran::get()
        ]);
    }
}
