<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MemberController extends Controller
{
    public function index ()
    {
        $authMember = Auth::guard('member')->user();

        return view('member.index', compact('authMember'));
    }
}
