<?php

namespace App\Http\Controllers;

use App\Models\HistoryTransaksi;
use App\Models\Member;
use App\Models\Testimoni;
use App\Models\User;
use Illuminate\Http\Request;

class LandingController extends Controller
{
    function index()
    {
        $totalUser = User::all();
        $totalMember = Member::all();
        $totalTransaksi = HistoryTransaksi::all();
        $testimonis = Testimoni::all();

        // Menampilkan tampilan landing home
        return view("landing-page.index", compact('totalUser', 'totalMember', 'totalTransaksi', 'testimonis'));
    }

    function about()
    {
        $testimonis = Testimoni::all();

        // Menampilkan tampilan landing about
        return view("landing-page.about", compact('testimonis'));
    }

    function harga()
    {
        $testimonis = Testimoni::all();

        // Menampilkan tampilan landing harga
        return view("landing-page.harga", compact('testimonis'));
    }

    function galeri()
    {
        $testimonis = Testimoni::all();

        // Menampilkan tampilan landing galeri
        return view("landing-page.galeri", compact('testimonis'));
    }

    function testimoni()
    {
        $testimonis = Testimoni::all();

        // Menampilkan tampilan landing testimoni
        return view("landing-page.testimoni", compact('testimonis'));
    }
}
