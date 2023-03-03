<?php

namespace App\Http\Controllers;

use App\Models\Pengaduan;
use App\Models\Tanggapan;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Http\RedirectResponse;

class TanggapanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Tanggapan::all();
        return view('petugas.tanggapan.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Pengaduan $pengaduan)
    {
        return view('petugas.tanggapan.create', compact('pengaduan'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, Pengaduan $pengaduan)
    {
        $rules = [
            'id_pengaduan' => ['required'],
            'tanggal_tanggapan' => ['required'],
            'tanggapan' => ['required'],
            'id_petugas' => ['required'],
        ];
        $validatedData = $request->validate($rules);
        Tanggapan::create($validatedData);
        $pengaduan->update(['status' => 'selesai']);
        return redirect(route('petugas.pengaduan.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Tanggapan $tanggapan): Response
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Tanggapan $tanggapan): Response
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Tanggapan $tanggapan): RedirectResponse
    {
        $rules = [
            'id_pengaduan' => ['required'],
            'tanggal_tanggapan' => ['required'],
            'tanggapan' => ['required'],
            'id_petugas' => ['required'],
        ];
        $validatedData = $request->validate($rules);
        Tanggapan::where('id_tanggapan', $tanggapan->id_tanggapan)->update();
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Tanggapan $tanggapan): RedirectResponse
    {
        //
    }
}
