@extends('layouts.main')

@section('title', 'Input Deteksi')

@section('content')
<section class="page-section">
    <h1>Input Hasil Deteksi Hama</h1>
    <p>Masukkan hasil prediksi model EfficientNet-B0 secara manual.</p>

    @if ($errors->any())
        <div class="alert alert-error">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('deteksi.proses') }}" method="POST" class="form-card" id="form-deteksi">
        @csrf

        <div class="form-group">
            <label for="lokasi">Lokasi Lahan</label>
            <select name="lokasi" id="lokasi" required>
                <option value="">-- Pilih Lokasi --</option>
                @foreach (['Garut Kota', 'Tarogong Kaler', 'Samarang'] as $lokasi)
                    <option value="{{ $lokasi }}" {{ old('lokasi') == $lokasi ? 'selected' : '' }}>{{ $lokasi }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="nama_tanaman">Nama Tanaman</label>
            <input type="text" name="nama_tanaman" id="nama_tanaman" list="daftar-tanaman"
                   placeholder="Contoh: Padi" value="{{ old('nama_tanaman') }}" required>
            <datalist id="daftar-tanaman">
                <option value="Padi"><option value="Jagung"><option value="Cabai">
            </datalist>
        </div>

        <div class="form-group">
            <label for="jenis_hama">Jenis Hama Hasil Prediksi</label>
            <input type="text" name="jenis_hama" id="jenis_hama" list="daftar-hama"
                   placeholder="Contoh: Wereng Cokelat" value="{{ old('jenis_hama') }}" required>
            <datalist id="daftar-hama">
                <option value="Wereng Cokelat"><option value="Ulat Grayak"><option value="Kutu Daun">
            </datalist>
        </div>

        <div class="form-group">
            <label for="confidence_score">Confidence Score (%)</label>
            <input type="number" name="confidence_score" id="confidence_score"
                   min="0" max="100" step="1" value="{{ old('confidence_score') }}" required>
            <div class="meter"><div id="meter-bar"></div></div>
            <small id="preview-status" class="hint">Status akan tampil otomatis setelah nilai diisi.</small>
        </div>

        <div class="form-group">
            <label for="tingkat_kerusakan">Tingkat Kerusakan Daun (%)</label>
            <input type="number" name="tingkat_kerusakan" id="tingkat_kerusakan"
                   min="0" max="100" step="0.1" value="{{ old('tingkat_kerusakan') }}" required>
        </div>

        <button type="submit" class="btn">Proses Deteksi</button>
    </form>
</section>
@endsection