<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use Illuminate\Http\Request;

class BukuController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->get('search');

        $buku = Buku::when($search, function ($query, $search) {
            $query->where('kode_buku', 'like', "%{$search}%")
                ->orWhere('judul', 'like', "%{$search}%")
                ->orWhere('pengarang', 'like', "%{$search}%")
                ->orWhere('penerbit', 'like', "%{$search}%")
                ->orWhere('tahun_terbit', 'like', "%{$search}%");
        })
        ->latest()
        ->get();

        return view('buku.index', compact('buku', 'search'));
    }

    public function create()
    {
        return view('buku.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'kode_buku' => 'required|unique:buku,kode_buku',
            'judul' => 'required',
            'pengarang' => 'required',
            'penerbit' => 'required',
            'tahun_terbit' => 'required|digits:4',
            'stok' => 'required|integer|min:0',
        ]);

        Buku::create($request->all());

        return redirect()->route('buku.index')
            ->with('success', 'Data buku berhasil ditambahkan.');
    }

    public function show(Buku $buku)
    {
        //
    }

    public function edit(Buku $buku)
    {
        return view('buku.edit', compact('buku'));
    }

    public function update(Request $request, Buku $buku)
    {
        $request->validate([
            'kode_buku' => 'required|unique:buku,kode_buku,' . $buku->id,
            'judul' => 'required',
            'pengarang' => 'required',
            'penerbit' => 'required',
            'tahun_terbit' => 'required|digits:4',
            'stok' => 'required|integer|min:0',
        ]);

        $buku->update($request->all());

        return redirect()->route('buku.index')
            ->with('success', 'Data buku berhasil diperbarui.');
    }

    public function destroy(Buku $buku)
    {
        $buku->delete();

        return redirect()->route('buku.index')
            ->with('success', 'Data buku berhasil dihapus.');
    }
}