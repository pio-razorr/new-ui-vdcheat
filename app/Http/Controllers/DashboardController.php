<?php

namespace App\Http\Controllers;

use App\Models\Member;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    function index()
    {
        $authUser = Auth::user();

        return view('user.index', compact('authUser'));
    }

    function transaksi()
    {
        $authUser = Auth::user();

        return view('user.transaksi', compact('authUser'));
    }
    
    function data_member()
    {
        $authUser = Auth::user();
        
        $members = Member::all();
        
        return view('user.data-member', compact('members', 'authUser'));
    }
    
    function data_user()
    {
        
        $authUser = Auth::user();
        
        $allUsers = User::all();
        
        return view('user.data-user', compact('allUsers', 'authUser'));
    }

    function transfer_saldo()
    {
        $authUser = Auth::user();

        return view('user.transfer-saldo', compact('authUser'));
    }

    function kompensasi()
    {
        $authUser = Auth::user();

        return view('user.kompensasi', compact('authUser'));
    }

    function tukar_point()
    {
        $authUser = Auth::user();
        
        return view('user.tukar-point', compact('authUser'));
    }

    function redeem_voucher()
    {
        $authUser = Auth::user();
        
        return view('user.redeem-voucher', compact('authUser'));
    }

    function ganti_password()
    {
        $authUser = Auth::user();
        
        return view('user.ganti-password', compact('authUser'));
    }
}
