@extends('layouts.main')

@section('title', 'Tentang')

@section('content')
<section class="page-section">
    <h1>Tentang AgriVision Garut</h1>

    <h2>Tujuan Sistem</h2>
    <p>AgriVision Garut dikembangkan untuk membantu Kelompok Tani Makmur mencatat hasil deteksi hama secara teratur, mempercepat penanganan serangan hama, dan mendokumentasikan riwayat serangan pada lahan pertanian.</p>

    <h2>Lokasi Deteksi</h2>
    <ul>
        <li>Kecamatan Garut Kota</li>
        <li>Kecamatan Tarogong Kaler</li>
        <li>Kecamatan Samarang</li>
    </ul>

    <h2>Parameter Hasil Deteksi yang Dicatat</h2>
    <ul>
        <li>Jenis hama</li>
        <li>Confidence score</li>
        <li>Tingkat kerusakan daun</li>
    </ul>

    <h2>Model Klasifikasi</h2>
    <p>Sistem memakai model klasifikasi citra <strong>EfficientNet-B0</strong> yang memprediksi jenis hama dari foto daun beserta nilai confidence score. Pada prototipe ini, hasil prediksi dimasukkan manual oleh pengguna.</p>
</section>
@endsection