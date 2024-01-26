<?php

namespace App\Http\Controllers;

use App\Models\mahasiswa;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = mahasiswa::all();
        return view('mhs.index', ['dataMhs' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('mhs.tambah');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nim' => 'required|string|max:255',
            'nama' => 'required|string|max:255',
            'kelas' => 'required|string|max:255',
            'deskripsi' => 'required|string',
        ]);

        // Create a new Mahasiswa instance with the validated data
        Mahasiswa::create([
            'nim' => $request->input('nim'),
            'nama' => $request->input('nama'),
            'kelas' => $request->input('kelas'),
            'des' => $request->input('deskripsi'),
        ]);
        return redirect()->route('mahasiswa.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = mahasiswa::find($id);
        return view('mhs.edit', ['mahasiswa' => $data]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'nim' => 'required|string|max:255',
            'nama' => 'required|string|max:255',
            'kelas' => 'required|string|max:255',
            'deskripsi' => 'required|string',
        ]);

        $data = mahasiswa::find($id)->update([
            'nim' => $request->input('nim'),
            'nama' => $request->input('nama'),
            'kelas' => $request->input('kelas'),
            'des' => $request->input('deskripsi'),
        ]);
        return redirect()->route('mahasiswa.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        echo $id;
    }
}
