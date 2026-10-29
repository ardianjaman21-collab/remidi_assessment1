@extends('layouts.main')

@section('title', 'Dashboard')

@section('content')
<section class="hero">
    <h1>Selamat Datang di AgriVision Garut – Sistem Deteksi Hama Tanaman Berbasis Computer Vision</h1>
    <p>Catat hasil prediksi hama tanaman, pantau tingkat kerusakan daun, dan dapatkan rekomendasi penanganan dengan cepat.</p>
    <a href="{{ route('deteksi') }}" class="btn">Mulai Input Deteksi</a>
    <a href="{{ route('riwayat') }}" class="btn btn-outline">Lihat Riwayat</a>
</section>

<section class="cards">
    <article class="card">
        <h3>Deteksi Cepat</h3>
        <p>Masukkan jenis hama dan confidence score hasil model EfficientNet-B0.</p>
    </article>
    <article class="card">
        <h3>Status Otomatis</h3>
        <p>Sistem menentukan status deteksi dan rekomendasi penanganan.</p>
    </article>
    <article class="card">
        <h3>Riwayat Tersimpan</h3>
        <p>Seluruh hasil deteksi tersimpan di database dan dapat dilihat kembali.</p>
    </article>
</section>
@endsection