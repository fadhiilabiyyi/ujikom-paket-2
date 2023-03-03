<?php

namespace App\Http\Controllers;

use App\Models\Masyarakat;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\RedirectResponse;

class MasyarakatController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('auth.register');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $rules = [
            'nik' => ['required', 'unique:masyarakat'],
            'nama' => ['required'],
            'username' => ['required', 'unique:masyarakat'],
            'password' => ['required'],
            'telp' => ['required']
        ];
        $validatedRequest = $request->validate($rules);
        $validatedRequest['password'] = Hash::make($validatedRequest['password']);
        Masyarakat::create($validatedRequest);
        return redirect(route('login'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Masyarakat $masyarakat): Response
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Masyarakat $masyarakat): Response
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Masyarakat $masyarakat): RedirectResponse
    {
        $rules = [
            'nik' => ['required', 'unique:masyarakat'],
            'nama' => ['required'],
            'username' => ['required', 'unique:masyarakat'],
            'password' => ['required'],
            'telp' => ['required']
        ];
        $validatedRequest = $request->validate($rules);
        $validatedRequest['password'] = Hash::make($validatedRequest['password']);
        Masyarakat::where('id', $masyarakat->nik)->update();
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Masyarakat $masyarakat): RedirectResponse
    {
        Masyarakat::delete($masyarakat->nik);
        //
    }

    public function indexMasyarakat()
    {
        $data = Masyarakat::all();
        return view('petugas.masyarakat.index', compact('data'));
    }
}
