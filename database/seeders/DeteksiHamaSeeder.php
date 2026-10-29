<?php

namespace Database\Seeders;

use App\Models\DeteksiHama;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;

class DeteksiHamaSeeder extends Seeder
{
    public function run(): void
    {
        $faker = Faker::create('id_ID');

        $daftarLokasi  = ['Garut Kota', 'Tarogong Kaler', 'Samarang'];
        $daftarTanaman = ['Padi', 'Jagung', 'Cabai'];
        $daftarHama    = ['Wereng Cokelat', 'Ulat Grayak', 'Kutu Daun'];

        $jumlah = 20;

        // Tiga skor pertama dipaksa agar ketiga status pasti muncul
        $skorPaksa = [40, 65, 92];

        for ($i = 0; $i < $jumlah; $i++) {
            $score = $skorPaksa[$i] ?? $faker->numberBetween(30, 99);

            if ($score < 50) {
                $status = 'Tidak Pasti';
            } elseif ($score <= 80) {
                $status = 'Indikasi Hama';
            } else {
                $status = 'Hama Terkonfirmasi';
            }

            DeteksiHama::create([
                'lokasi'            => $faker->randomElement($daftarLokasi),
                'nama_tanaman'      => $faker->randomElement($daftarTanaman),
                'jenis_hama'        => $faker->randomElement($daftarHama),
                'confidence_score'  => $score,
                'tingkat_kerusakan' => $faker->randomFloat(1, 0, 80),
                'status_deteksi'    => $status,
            ]);
        }
    }
}