<?php

namespace App\Http\Controllers;

use App\Models\Member;
use App\Models\User;
use Illuminate\Http\Request;

class LandingController extends Controller
{
    function index()
    {
        $totalUser = User::all();
        $totalMember = Member::all();

        // Menampilkan tampilan landing home
        return view("landing-page.index", compact('totalUser', 'totalMember'));
    }

    function about()
    {
        // Menampilkan tampilan landing about
        return view("landing-page.about");
    }

    function harga()
    {
        // Menampilkan tampilan landing harga
        return view("landing-page.harga");
    }

    function galeri()
    {
        // Menampilkan tampilan landing galeri
        return view("landing-page.galeri");
    }

    function testimoni()
    {
        // Menampilkan tampilan landing testimoni
        return view("landing-page.testimoni");
    }
}
