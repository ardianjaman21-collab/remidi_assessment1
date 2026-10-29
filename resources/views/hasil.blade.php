@extends('layouts.main')

@section('title', 'Hasil Deteksi')

@section('content')
<section class="page-section">
    <h1>Hasil Deteksi Hama</h1>

    @if ($status === 'Hama Terkonfirmasi')
        <div class="alert alert-danger">Peringatan! Hama terkonfirmasi pada lahan di {{ $data['lokasi'] }}.</div>
    @elseif ($status === 'Indikasi Hama')
        <div class="alert alert-warning">Ada indikasi hama. Tetap lakukan pemantauan.</div>
    @else
        <div class="alert alert-info">Hasil belum pasti. Mohon verifikasi manual.</div>
    @endif

    <table class="table">
        <tr><th>Lokasi Lahan</th><td>{{ $data['lokasi'] }}</td></tr>
        <tr><th>Nama Tanaman</th><td>{{ $data['nama_tanaman'] }}</td></tr>
        <tr><th>Jenis Hama Hasil Prediksi</th><td>{{ $data['jenis_hama'] }}</td></tr>
        <tr><th>Confidence Score</th><td>{{ $data['confidence_score'] }}%</td></tr>
        <tr><th>Tingkat Kerusakan Daun</th><td>{{ $data['tingkat_kerusakan'] }}%</td></tr>
        <tr>
            <th>Status Deteksi</th>
            <td>
                @if ($status === 'Hama Terkonfirmasi')
                    <span class="badge badge-danger">{{ $status }}</span>
                @elseif ($status === 'Indikasi Hama')
                    <span class="badge badge-warning">{{ $status }}</span>
                @else
                    <span class="badge badge-info">{{ $status }}</span>
                @endif
            </td>
        </tr>
        <tr><th>Rekomendasi Penanganan</th><td>{{ $rekomendasi }}</td></tr>
    </table>

    <a href="{{ route('deteksi') }}" class="btn">Input Lagi</a>
    <a href="{{ route('riwayat') }}" class="btn btn-outline">Lihat Riwayat</a>
</section>
@endsection