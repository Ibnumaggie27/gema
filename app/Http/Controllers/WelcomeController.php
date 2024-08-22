<?php

namespace App\Http\Controllers;

use App\Models\Kandidat;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index()
    {
        return view('awal'); // Ganti 'lkbb' dengan nama view Anda
    }
    public function kandidatv()
    {
        try {
            $data['kandidat'] = Kandidat::all();
            return view('welcome',compact('data'));
        } catch (\Throwable $th) {
            return view('error.index', ['message' => $th->getMessage()]);
        }
    }
    public function lkbb()
    {
        return view('frontend.nilai.lkbb'); // Ganti 'lkbb' dengan nama view Anda
    }

    // Halaman untuk Pidato Umum (PU)
    public function pu()
    {
        return view('frontend.nilai.umum'); // Ganti 'pu' dengan nama view Anda
    }

    // Halaman untuk Pidato Akhir (PA)
    public function pa()
    {
        return view('frontend.nilai.agama'); // Ganti 'pa' dengan nama view Anda
    }

    // Halaman untuk Pidato Ketua (PK)
    public function pk()
    {
        return view('frontend.nilai.keperamukaan'); // Ganti 'pk' dengan nama view Anda
    }
    public function siaga()
    {
        return view('frontend.soal.siaga'); // Ganti 'pk' dengan nama view Anda
    }
    public function penggalang()
    {
        return view('frontend.soal.penggalang'); // Ganti 'pk' dengan nama view Anda
    }
    public function penegak()
    {
        return view('frontend.soal.penegak'); // Ganti 'pk' dengan nama view Anda
    }
    public function bank()
    {
        return view('frontend.nilai.bank'); // Ganti 'pk' dengan nama view Anda
    }
    public function isyarat()
    {
        return view('frontend.nilai.isyarat'); // Ganti 'pk' dengan nama view Anda
    }
    public function joko()
    {
        return view('frontend.nilai.joko'); // Ganti 'pk' dengan nama view Anda
    }
    public function ppgd()
    {
        return view('frontend.nilai.ppgd'); // Ganti 'pk' dengan nama view Anda
    }
    public function sandi()
    {
        return view('frontend.nilai.sandi'); // Ganti 'pk' dengan nama view Anda
    }
    public function semboyan()
    {
        return view('frontend.nilai.semboyan'); // Ganti 'pk' dengan nama view Anda
    }
    public function yel2()
    {
        return view('frontend.nilai.yel2'); // Ganti 'pk' dengan nama view Anda
    }
    public function juara()
    {
        return view('frontend.juara.umum'); // Ganti 'pk' dengan nama view Anda
    }
}
