<?php

namespace App\Http\Controllers;

use App\Models\Petugas;
use App\Models\Pengaduan;
use App\Models\Tanggapan;
use App\Models\Masyarakat;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        $masyarakat = Masyarakat::all();
        $pengaduan = Pengaduan::all();
        $petugas = Petugas::all();
        $tanggapan = Tanggapan::all();
        if (Auth::guard('masyarakat')->check()) {
            return view('masyarakat');
        } elseif (Auth::guard('petugas')->user()->level == 'admin') {
            return view('petugas.index', compact('masyarakat', 'pengaduan', 'petugas', 'tanggapan'));
        } elseif (Auth::guard('petugas')->check()) {
            return view('petugas', compact('masyarakat', 'pengaduan', 'petugas', 'tanggapan'));
        }
    }
}