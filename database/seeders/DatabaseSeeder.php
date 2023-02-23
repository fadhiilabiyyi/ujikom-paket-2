<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Petugas;
use App\Models\Masyarakat;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        Masyarakat::create([
            'nik' => '7471',
            'nama' => 'masyarakat',
            'username' => 'masyarakat',
            'password' => Hash::make('password'),
            'telp' => '1234'
        ]);

        Petugas::create([
            'id_petugas' => '1',
            'nama_petugas' => 'tamsil',
            'username' => 'petugas',
            'password' => Hash::make('password'),
            'telp' => '1234',
            'level' => 'petugas'
        ]);

        Petugas::create([
            'id_petugas' => '2',
            'nama_petugas' => 'tamsil',
            'username' => 'admin',
            'password' => Hash::make('password'),
            'telp' => '1234',
            'level' => 'admin'
        ]);
    }
}
