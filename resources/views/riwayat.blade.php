@extends('layouts.main')

@section('title', 'Riwayat Deteksi')

@section('content')
<section class="page-section">
    <h1>Riwayat Deteksi Hama</h1>

    <div class="cards stats">
        <article class="card"><h3>{{ $riwayat->count() }}</h3><p>Total Deteksi</p></article>
        <article class="card"><h3>{{ $riwayat->where('status_deteksi', 'Hama Terkonfirmasi')->count() }}</h3><p>Hama Terkonfirmasi</p></article>
        <article class="card"><h3>{{ $riwayat->where('status_deteksi', 'Indikasi Hama')->count() }}</h3><p>Indikasi Hama</p></article>
        <article class="card"><h3>{{ $riwayat->where('status_deteksi', 'Tidak Pasti')->count() }}</h3><p>Tidak Pasti</p></article>
    </div>

    <input type="search" id="cari" class="search" placeholder="Cari lokasi, tanaman, atau hama...">

    <div class="table-wrap">
        <table class="table" id="tabel-riwayat">
            <thead>
                <tr>
                    <th>No</th><th>Lokasi</th><th>Tanaman</th><th>Jenis Hama</th>
                    <th>Confidence</th><th>Kerusakan</th><th>Status</th><th>Rekomendasi</th><th>Waktu</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($riwayat as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->lokasi }}</td>
                        <td>{{ $item->nama_tanaman }}</td>
                        <td>{{ $item->jenis_hama }}</td>
                        <td>{{ $item->confidence_score }}%</td>
                        <td>{{ $item->tingkat_kerusakan }}%</td>
                        <td>
                            @if ($item->status_deteksi === 'Hama Terkonfirmasi')
                                <span class="badge badge-danger">{{ $item->status_deteksi }}</span>
                            @elseif ($item->status_deteksi === 'Indikasi Hama')
                                <span class="badge badge-warning">{{ $item->status_deteksi }}</span>
                            @else
                                <span class="badge badge-info">{{ $item->status_deteksi }}</span>
                            @endif
                        </td>
                        <td>{{ $item->rekomendasi }}</td>
                        <td>{{ $item->created_at->format('d M Y H:i') }}</td>
                    </tr>
                @empty
                    <tr><td colspan="9" class="empty">Belum ada data deteksi.</td></tr>
                @endforelse
            </tbody>
        </table>
    </div>
</section>
@endsection