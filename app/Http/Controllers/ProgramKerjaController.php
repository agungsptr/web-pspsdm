<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProgramKerjaController extends Controller
{
    public function Pertanian()
    {
        return view('home.program-kerja.pertanian');
    }

    public function Kesehatan()
    {
        return view('home.program-kerja.kesehatan');
    }

    public function AirBersih()
    {
        return view('home.program-kerja.airbersih');
    }

    public function Pendidikan()
    {
        return view('home.program-kerja.pendidikan');
    }

    public function PemberdayaanPerempuan()
    {
        return view('home.program-kerja.pemperempuan');
    }

    public function UsahaEkonomiProduktif()
    {
        return view('home.program-kerja.usahaekonomi');
    }

    public function PadatKarya()
    {
        return view('home.program-kerja.padatkarya');
    }

    public function PenelitianDanPelatihan()
    {
        return view('home.program-kerja.pelatihanpenelitian');
    }

}
