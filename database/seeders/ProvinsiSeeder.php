<?php

namespace Database\Seeders;

use App\Models\provinsi;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProvinsiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        provinsi::create([
            'id' => 1,
            'nama' => 'NAD Aceh',
        ]);

        Provinsi::create([
            'id' => 2,
            'nama' => 'Sumatera Utara (SUMUT)',
        ]);

        Provinsi::create([
            'id' => 3,
            'nama' => 'Sumatera Barat (SUMBAR)',
        ]);

        Provinsi::create([
            'id' => 4,
            'nama' => 'Sumatera Selatan (SUMSEL)',
        ]);

        Provinsi::create([
            'id' => 5,
            'nama' => 'RIAU',
        ]);

        Provinsi::create([
            'id' => 6,
            'nama' => 'Kepulauan Riau (KEPRI)',
        ]);

        Provinsi::create([
            'id' => 7,
            'nama' => 'Jambi',
        ]);

        Provinsi::create([
            'id' => 8,
            'nama' => 'Bengkulu',
        ]);

        Provinsi::create([
            'id' => 9,
            'nama' => 'Bangka Belitung (BABEL)',
        ]);

        Provinsi::create([
            'id' => 10,
            'nama' => 'Lampung',
        ]);

        Provinsi::create([
            'id' => 11,
            'nama' => 'Banten',
        ]);


        Provinsi::create([
            'id' => 12,
            'nama' => 'Jawa Barat (JABAR)',
        ]);

        Provinsi::create([
            'id' => 13,
            'nama' => 'Jawa Tengah (JATENG)',
        ]);

        Provinsi::create([
            'id' => 14,
            'nama' => 'Jawa Timur (JATIM)',
        ]);

        Provinsi::create([
            'id' => 15,
            'nama' => 'DKI Jakarta',
        ]);

        Provinsi::create([
            'id' => 16,
            'nama' => 'Daerah Istimewa Yogyakarta',
        ]);

        Provinsi::create([
            'id' => 17,
            'nama' => 'Bali',
        ]);

        Provinsi::create([
            'id' => 18,
            'nama' => 'Nusa Tenggara Barat (NTB)',
        ]);


        Provinsi::create([
            'id' => 19,
            'nama' => 'Nusa Tenggara Timur (NTT)',
        ]);

        Provinsi::create([
            'id' => 20,
            'nama' => 'Kalimantan Barat (KALBAR)',
        ]);

        Provinsi::create([
            'id' => 21,
            'nama' => 'Kalimantan Selatan (KALSEL)',
        ]);

        Provinsi::create([
            'id' => 22,
            'nama' => 'Kalimantan Tengah (KALTENG)',
        ]);

        Provinsi::create([
            'id' => 23,
            'nama' => 'Kalimantan Timur (KALTIM)',
        ]);

        Provinsi::create([
            'id' => 24,
            'nama' => 'Kalimantan Utara (KALTARA)',
        ]);

        Provinsi::create([
            'id' => 25,
            'nama' => 'Gorontalo',
        ]);

        Provinsi::create([
            'id' => 26,
            'nama' => 'Sulawesi Selatan (SULSEL)',
        ]);

        Provinsi::create([
            'id' => 27,
            'nama' => 'Sulawesi Tenggara (SULTRA)',
        ]);

        Provinsi::create([
            'id' => 28,
            'nama' => 'Sulawesi Tengah (SULTENG)',
        ]);

        Provinsi::create([
            'id' => 29,
            'nama' => 'Sulawesi Utara (SULUT)',
        ]);

        Provinsi::create([
            'id' => 30,
            'nama' => 'Sulawesi Barat (SULBAR)',
        ]);

        Provinsi::create([
            'id' => 31,
            'nama' => 'Maluku',
        ]);

        Provinsi::create([
            'id' => 32,
            'nama' => 'Maluku Utara',
        ]);

        Provinsi::create([
            'id' => 33,
            'nama' => 'Papua',
        ]);

        Provinsi::create([
            'id' => 34,
            'nama' => 'Papua Barat',
        ]);
    }
}
