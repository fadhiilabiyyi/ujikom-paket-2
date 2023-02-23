<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        if (Auth::guard('masyarakat')->check()) {
            return view('masyarakat');
        } elseif (Auth::guard('petugas')->user()->level == 'admin') {
            return view('admin');
        } elseif (Auth::guard('petugas')->check()) {
            return view('petugas');
        }
    }
}