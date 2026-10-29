document.addEventListener('DOMContentLoaded', function () {

    var toggle = document.getElementById('menu-toggle');
    var nav = document.getElementById('navbar');
    if (toggle && nav) {
        toggle.addEventListener('click', function () {
            nav.classList.toggle('open');
        });
    }

    var input = document.getElementById('confidence_score');
    var bar = document.getElementById('meter-bar');
    var info = document.getElementById('preview-status');

    function perbarui() {
        var nilai = parseInt(input.value, 10);
        if (isNaN(nilai)) {
            bar.style.width = '0';
            info.textContent = 'Status akan tampil otomatis setelah nilai diisi.';
            return;
        }
        nilai = Math.max(0, Math.min(100, nilai));
        var status, warna;
        if (nilai < 50) {
            status = 'Tidak Pasti'; warna = '#1565c0';
        } else if (nilai <= 80) {
            status = 'Indikasi Hama'; warna = '#f9a825';
        } else {
            status = 'Hama Terkonfirmasi'; warna = '#c62828';
        }
        bar.style.width = nilai + '%';
        bar.style.background = warna;
        info.textContent = 'Pratinjau status: ' + status;
    }

    if (input && bar && info) {
        input.addEventListener('input', perbarui);
        perbarui();
    }

    var cari = document.getElementById('cari');
    var baris = document.querySelectorAll('#tabel-riwayat tbody tr');
    if (cari) {
        cari.addEventListener('input', function () {
            var kata = cari.value.toLowerCase();
            baris.forEach(function (tr) {
                tr.style.display = tr.textContent.toLowerCase().indexOf(kata) > -1 ? '' : 'none';
            });
        });
    }
});