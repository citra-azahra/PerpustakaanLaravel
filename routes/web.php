<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\View;
use App\Http\Controllers\BukuController;
use App\Http\Controllers\AnggotaController;
use App\Http\Controllers\PeminjamanController;
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('welcome');
});


Route::middleware('auth')->group(function () {

    // =========================
    // DATA NOTIFIKASI
    // =========================
    View::composer(
        ['dashboard', 'buku.*', 'anggota.*', 'peminjaman.*', 'profile.edit'],
        function ($view) {
            $view->with([
                'latestBuku' => \App\Models\Buku::latest()->first(),
                'latestAnggota' => \App\Models\Anggota::latest()->first(),
                'latestPeminjaman' => \App\Models\Peminjaman::with('buku')->latest()->first(),
            ]);
        }
    );

    // =========================
    // DASHBOARD
    // =========================
    Route::get('/dashboard', function (Request $request) {

        $totalBuku = \App\Models\Buku::count();

        $totalAnggota = \App\Models\Anggota::count();

        $sedangDipinjam = \App\Models\Peminjaman::where(
            'status',
            'dipinjam'
        )->count();

        $sudahDikembalikan = \App\Models\Peminjaman::where(
            'status',
            'kembali'
        )->count();


        // Aktivitas terbaru
        $latestBuku = \App\Models\Buku::latest()->first();

        $latestAnggota = \App\Models\Anggota::latest()->first();

        $latestPeminjaman = \App\Models\Peminjaman::with('buku')
            ->latest()
            ->first();
        
        $search = $request->get('search');

        $search = trim($request->get('search', ''));

            if ($search !== '') {

                $buku = \App\Models\Buku::where('kode_buku', 'like', "%{$search}%")
                    ->orWhere('judul', 'like', "%{$search}%")
                    ->orWhere('pengarang', 'like', "%{$search}%")
                    ->first();

                if ($buku) {
                    return redirect()->route('buku.index', ['search' => $search]);
                }

                $anggota = \App\Models\Anggota::where('nis', 'like', "%{$search}%")
                    ->orWhere('nama', 'like', "%{$search}%")
                    ->orWhere('kelas', 'like', "%{$search}%")
                    ->first();

                if ($anggota) {
                    return redirect()->route('anggota.index', ['search' => $search]);
                }

                $peminjaman = \App\Models\Peminjaman::with(['buku', 'anggota'])
                    ->where(function ($query) use ($search) {

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
                    ->first();

                if ($peminjaman) {
                    return redirect()->route('peminjaman.index', ['search' => $search]);
                }
            }


        return view('dashboard', compact(
            'totalBuku',
            'totalAnggota',
            'sedangDipinjam',
            'sudahDikembalikan',
            'latestBuku',
            'latestAnggota',
            'latestPeminjaman'
        ));

    })->name('dashboard');


    // =========================
    // PROFIL
    // =========================
    Route::get('/profile', function (Request $request) {
        return view('profile.edit', [
            'user' => $request->user(),
        ]);
    })->name('profile.edit');

    Route::patch('/profile', function (Request $request) {
        $user = $request->user();

        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
        ]);

        $user->update([
            'name' => $request->name,
            'email' => $request->email,
        ]);

        return back()->with('status', 'profile-updated');
    })->name('profile.update');

    Route::delete('/profile', function (Request $request) {
        $user = $request->user();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    })->name('profile.destroy');


    // =========================
    // DATA BUKU
    // =========================
    Route::resource('buku', BukuController::class);


    // =========================
    // DATA ANGGOTA
    // =========================
    Route::resource('anggota', AnggotaController::class)->parameters([
        'anggota' => 'anggota'
    ]);


    // =========================
    // DATA PEMINJAMAN
    // =========================
    Route::resource('peminjaman', PeminjamanController::class);

});


require __DIR__.'/auth.php';