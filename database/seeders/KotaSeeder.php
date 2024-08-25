<?php

namespace Database\Seeders;

use App\Models\kota;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KotaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        kota::truncate();

        $csvFile = fopen(base_path("database/daftar-kabupaten-kota-di-indonesia-excel.csv"), "r");

        $firstline = true;
        while (($data = fgetcsv($csvFile, 2000, ",")) !== FALSE) {
            if (!$firstline) {
                kota::create([
                    "id_provinsi" => $data['1'],
                    "nama" => $data['0']
                ]);
            }
            $firstline = false;
        }

        fclose($csvFile);
    }
}
