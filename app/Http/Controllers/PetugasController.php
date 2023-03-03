<?php

namespace App\Http\Controllers;

use App\Models\Petugas;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\RedirectResponse;

class PetugasController extends Controller  
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Petugas::all();
        return view('petugas.petugas.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('petugas.petugas.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $rules = [
            'nama_petugas' => ['required'],
            'username' => ['required'],
            'password' => ['required'],
            'telp' => ['required'],
        ];
        $validatedData = $request->validate($rules);
        $validatedData['password'] = Hash::make($validatedData['password']);
        $validatedData['level'] = 'petugas';
        Petugas::create($validatedData);
        return redirect(route('petugas.petugas.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Petugas $petugas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Petugas $petugas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Petugas $petugas)
    {
        $rules = [
            'nama_petugas' => ['required'],
            'username' => ['required'],
            'password' => ['required'],
            'level' => ['required']
        ];
        $validatedData = $request->validate($rules);
        $validatedData = Hash::make($validatedData['password']);
        $validatedData = $validatedData['level'] = 'petugas';
        Petugas::where('id_petugas', $petuga->id_petugas)->update();
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Petugas $petugas)
    {
        //
    }
}
