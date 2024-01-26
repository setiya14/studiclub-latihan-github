<?php

namespace Database\Seeders;

use App\Models\mahasiswa;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class mahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        mahasiswa::create([
            'nim' => 'f1e121',
            'nama' => 'odis',
            'kelas' => 'r005',
            'des' => 'pemateri 1'
        ]);
        mahasiswa::create([
            'nim' => 'f1e122',
            'nama' => 'kodrat',
            'kelas' => 'r004',
            'des' => 'pemateri 2'
        ]);
        mahasiswa::create([
            'nim' => 'f1e123',
            'nama' => 'tasim',
            'kelas' => 'r003',
            'des' => 'pemateri cadangan'
        ]);
    }
}
