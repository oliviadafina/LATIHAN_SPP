<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Petugas;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'username'      => 'admin',
            'password'      => Hash::make('admin'),
            'nama_petugas'  => 'Olivia',
            'level'         => 'admin'
        ]);
        User::create([
            'username'      => 'petugas',
            'password'      => Hash::make('petugas'),
            'nama_petugas'  => 'Aulia',
            'level'         => 'petugas'
        ]);
    }
}
