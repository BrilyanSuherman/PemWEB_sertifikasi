<?php

namespace Database\Seeders;

use App\Models\agama;
use GuzzleHttp\Promise\Create;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AgamaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        agama::create([
            'id' => 1,
            'nama' => 'ISLAM',
        ]);

        agama::create([
            'id' => 2,
            'nama' => 'KATOLIK',
        ]);

        agama::create([
            'id' => 3,
            'nama' => 'KRISTEN',
        ]);

        agama::create([
            'id' => 4,
            'nama' => 'HINDU',
        ]);

        agama::create([
            'id' => 5,
            'nama' => 'BUDHA',
        ]);

        agama::create([
            'id' => 6,
            'nama' => 'LAIN-LAIN',
        ]);
    }
}
