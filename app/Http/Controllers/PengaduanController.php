<?php

namespace App\Http\Controllers;

use App\Models\Pengaduan;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;

class PengaduanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Pengaduan::all();
        return view('petugas.pengaduan.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('masyarakat.form');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'tanggal_pengaduan' => 'required',
            'isi_laporan' => 'required',
            'foto' => 'image', 'file', 'max:3024'
        ]);
        // $rules = [
        //     'tanggal_pengaduan' => ['required'],
        //     'isi_laporan' => ['required'],
        //     'foto' => ['image', 'file', 'max:3024'],
        // ];
        // $validatedData = $request->validate($rules);
        $validatedData['nik'] = Auth::guard('masyarakat')->user()->nik;
        $validatedData['status'] = '0';
        $validatedData['foto'] = $request->file('foto')->store('public/images');
        $validatedData['foto'] = substr($validatedData['foto'], 7);
        Pengaduan::create($validatedData);
        return redirect(route('dashboard'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Pengaduan $pengaduan)
    {
        return view('petugas.pengaduan.show', compact('pengaduan'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pengaduan $pengaduan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pengaduan $pengaduan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pengaduan $pengaduan)
    {
        //
    }

    public function verification(Pengaduan $pengaduan)
    {
        $pengaduan->update(['status' => 'proses']);
        return redirect(route('dashboard'));
    }

    public function indexMasyarakat()
    {
        $data = Pengaduan::where('nik', Auth::guard('masyarakat')->user()->nik)->get();
        return view('masyarakat.pengaduan', compact('data'));
    }

    public function showMasyarakat(Pengaduan $pengaduan)
    {
        return view('masyarakat.show', compact('pengaduan'));
    }
}
