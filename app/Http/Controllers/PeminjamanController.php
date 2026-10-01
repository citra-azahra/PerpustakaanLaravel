<?php

namespace App\Http\Controllers;

use App\Models\Peminjaman;
use App\Models\Buku;
use App\Models\Anggota;
use Illuminate\Http\Request;

class PeminjamanController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->get('search');

        $peminjaman = Peminjaman::with(['buku', 'anggota'])
            ->when($search, function ($query, $search) {
                $query->whereHas('buku', function ($q) use ($search) {
                    $q->where('judul', 'like', "%{$search}%")
                    ->orWhere('kode_buku', 'like', "%{$search}%");
                })
                ->orWhereHas('anggota', function ($q) use ($search) {
                    $q->where('nama', 'like', "%{$search}%")
                    ->orWhere('nis', 'like', "%{$search}%");
                })
                ->orWhere('status', 'like', "%{$search}%");
            })
            ->latest()
            ->get();

        return view('peminjaman.index', compact('peminjaman', 'search'));
    }

    public function create()
    {
        $buku = Buku::where('stok', '>', 0)->get();
        $anggota = Anggota::latest()->get();

        return view('peminjaman.create', compact('buku', 'anggota'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'buku_id' => 'required|exists:buku,id',
            'anggota_id' => 'required|exists:anggota,id',
            'tanggal_pinjam' => 'required|date',
        ]);

        $buku = Buku::findOrFail($request->buku_id);

        if ($buku->stok <= 0) {
            return back()->with('error', 'Stok buku sudah habis.');
        }

        Peminjaman::create([
            'buku_id' => $request->buku_id,
            'anggota_id' => $request->anggota_id,
            'tanggal_pinjam' => $request->tanggal_pinjam,
            'status' => 'dipinjam',
        ]);

        $buku->decrement('stok');

        return redirect()->route('peminjaman.index')
            ->with('success', 'Peminjaman berhasil ditambahkan.');
    }

    public function show(Peminjaman $peminjaman)
    {
        //
    }

    public function edit(Peminjaman $peminjaman)
    {
        //
    }

    public function update(Request $request, Peminjaman $peminjaman)
    {
        if ($peminjaman->status === 'kembali') {
            return redirect()->route('peminjaman.index')
                ->with('error', 'Buku ini sudah dikembalikan.');
        }

        $request->validate([
            'tanggal_kembali' => 'required|date',
            'status' => 'required|in:kembali',
        ]);

        $peminjaman->update([
            'tanggal_kembali' => $request->tanggal_kembali,
            'status' => 'kembali',
        ]);

        $peminjaman->buku->increment('stok');

        return redirect()->route('peminjaman.index')
            ->with('success', 'Buku berhasil dikembalikan.');
    }

    public function destroy(Peminjaman $peminjaman)
    {
        //
    }
}