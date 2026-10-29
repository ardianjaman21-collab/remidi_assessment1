<nav class="navbar" id="navbar">
    <a href="{{ route('home') }}"
       class="{{ request()->routeIs('home') ? 'active' : '' }}">Dashboard</a>

    <a href="{{ route('tentang') }}"
       class="{{ request()->routeIs('tentang') ? 'active' : '' }}">Tentang</a>

    <a href="{{ route('deteksi') }}"
       class="{{ request()->routeIs('deteksi', 'deteksi.proses') ? 'active' : '' }}">Input Deteksi</a>

    <a href="{{ route('riwayat') }}"
       class="{{ request()->routeIs('riwayat') ? 'active' : '' }}">Riwayat Deteksi</a>
</nav>