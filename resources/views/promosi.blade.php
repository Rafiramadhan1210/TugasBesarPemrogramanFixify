@extends('layout')
@section('content')
<div class="relative bg-gray-900 py-24 overflow-hidden mb-8">
    <div class="mx-auto max-w-7xl px-6 lg:px-8 text-center">
        <h1 class="text-4xl font-bold text-white">Promo Spesial: Perbaikan Laptop</h1>
        <p class="mt-4 text-lg text-gray-400">Diskon 20% untuk servis perbaikan laptop (layanan hardware dan software) — berlaku bulan ini.</p>
    </div>
</div>

<div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
    <div class="bg-gray-800/50 border border-white/10 rounded-lg p-8">
        <h2 class="text-2xl font-bold text-white mb-4">Detail Promo</h2>
        <ul class="text-gray-300 list-disc list-inside space-y-2">
            <li>Potongan 20% untuk perbaikan layar, baterai, dan perbaikan motherboard (termasuk pengecekan gratis).</li>
            <li>Gratis konsultasi awal dan estimasi harga.</li>
            <li>Berlaku untuk layanan yang dibuat melalui formulir pada halaman <a href="/layanan" class="text-indigo-300 underline">Layanan</a>.</li>
        </ul>

        <div class="mt-6">
            <a href="/layanan#form-konsultasi" class="inline-block bg-indigo-600 hover:bg-indigo-500 text-white px-6 py-3 rounded">Ajukan Permintaan Sekarang</a>
        </div>
    </div>
</div>
@endsection
