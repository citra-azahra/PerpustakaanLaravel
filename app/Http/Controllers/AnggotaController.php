<?php

namespace App\Http\Controllers;

use App\Models\Anggota;
use Illuminate\Http\Request;

class AnggotaController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->get('search');

        $anggota = Anggota::when($search, function ($query, $search) {
            $query->where('nis', 'like', "%{$search}%")
                ->orWhere('nama', 'like', "%{$search}%")
                ->orWhere('kelas', 'like', "%{$search}%");
        })
        ->latest()
        ->get();

        return view('anggota.index', compact('anggota', 'search'));
    }

    public function create()
    {
        return view('anggota.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nis' => 'required',
            'nama' => 'required',
            'kelas' => 'required',
        ]);

        Anggota::create($request->all());

        return redirect()->route('anggota.index')
            ->with('success', 'Data anggota berhasil ditambahkan.');
    }

    public function show(Anggota $anggota)
    {
        //
    }

    public function edit(Anggota $anggota)
    {
        return view('anggota.edit', compact('anggota'));
    }

    public function update(Request $request, Anggota $anggota)
    {
        $request->validate([
            'nis' => 'required',
            'nama' => 'required',
            'kelas' => 'required',
        ]);

        $anggota->update($request->all());

        return redirect()->route('anggota.index')
            ->with('success', 'Data anggota berhasil diperbarui.');
    }

    public function destroy(Anggota $anggota)
    {
        $anggota->delete();

        return redirect()->route('anggota.index')
            ->with('success', 'Data anggota berhasil dihapus.');
    }
}