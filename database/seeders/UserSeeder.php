<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Contoh User Pegawai
        DB::table('users')->insert([
            [
                'name' => 'Budi Pegawai',
                'email' => 'budi.pegawai@example.com',
                'email_verified_at' => now(),
                'password' => Hash::make('passwordpegawai'), // Ganti dengan password yang aman
                'role' => 'pegawai',
                'is_admin' => 0, // Sesuaikan jika pegawai ini adalah admin
                'is_superadmin' => 1, // Sesuaikan jika pegawai ini adalah superadmin
                'remember_token' => Str::random(10),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Ani Pegawai',
                'email' => 'ani.pegawai@example.com',
                'email_verified_at' => now(),
                'password' => Hash::make('passwordpegawai2'), // Ganti dengan password yang aman
                'role' => 'pegawai',
                'is_admin' => 1, // Contoh pegawai sebagai admin
                'is_superadmin' => 0,
                'remember_token' => Str::random(10),
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);

        // Contoh User Pasien
        DB::table('users')->insert([
            [
                'name' => 'Citra Pasien',
                'email' => 'citra.pasien@example.com',
                'email_verified_at' => now(),
                'password' => Hash::make('passwordpasien'), // Ganti dengan password yang aman
                'role' => 'pasien',
                'is_admin' => 0,
                'is_superadmin' => 0,
                'remember_token' => Str::random(10),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Doni Pasien',
                'email' => 'doni.pasien@example.com',
                'email_verified_at' => now(),
                'password' => Hash::make('passwordpasien2'), // Ganti dengan password yang aman
                'role' => 'pasien',
                'is_admin' => 0,
                'is_superadmin' => 0,
                'remember_token' => Str::random(10),
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);

        // Anda bisa menambahkan lebih banyak data user di sini
        // Misalnya, jika Anda ingin membuat user superadmin secara spesifik
        DB::table('users')->insert([
            [
                'name' => 'Super Admin User',
                'email' => 'superadmin@example.com',
                'email_verified_at' => now(),
                'password' => Hash::make('supersecret'), // Ganti dengan password yang sangat aman
                'role' => 'superadmin', // Atau role lain yang sesuai
                'is_admin' => 1,
                'is_superadmin' => 1,
                'remember_token' => Str::random(10),
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}