<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Models\Layanan;

Route::get('/', function () {
    return view('welcome',[
        'title'=>'Welcome - Fixify'
    ]);
})->name('welcome');

Route::get('/tentang', function () {
    return view('tentang',[
        'title'=>'Fixify | Tentang Kami'
    ]);
})->name('tentang');

Route::get('/pricelist', function () {
    return view('pricelist');
})->name('pricelist');

Route::get('/kontak', action: function () {
    return view('kontak');
})->name('kontak'); 

// CRUD layanan
Route::get('/layanan',[\App\Http\Controllers\LayananController::class,'index'])->name('layanan');
Route::post('/layanan',[\App\Http\Controllers\LayananController::class,'store'])->name('layanan');
Route::get('/layanan/{id}/edit',[\App\Http\Controllers\LayananController::class,'edit'])->name('layanan.edit');
Route::patch('/layanan/{id}',[\App\Http\Controllers\LayananController::class,'update'])->name('layanan.update');
Route::delete('/layanan/{id}',[\App\Http\Controllers\LayananController::class,'destroy'])->name('layanan.destroy');

Route::get('/dashboard', function () {
    $data = Layanan::all();

    // data analisis
    $totalPesanan = Layanan::count();
    $pesananHariIni = Layanan::whereDate('created_at', today())->count();
    $pesananBulanIni = Layanan::whereMonth('created_at', now()->month)->count();
    $layananPopuler = Layanan::select('layanan')->selectRaw('count(*) as total')
        ->groupBy('layanan')->orderByDesc('total')->first();
    
    // mengirim data ke view dashboard
    return view('dashboard', compact('data', 'totalPesanan', 'pesananHariIni', 'pesananBulanIni', 'layananPopuler'));
    })->middleware(['auth', 'verified'])->name('dashboard');

    // Halaman promosi
    Route::get('/promosi', function () {
        return view('promosi', [
            'title' => 'Promosi - Perbaikan Laptop'
        ]);
    })->name('promosi');

// profil login
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// autentikasi
require __DIR__.'/auth.php';
