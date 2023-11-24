<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\User::factory(10)->create();

        \App\Models\User::create([
            "name" => "Admin Rudi",
            "email" => "rudi@fic10.com",
            "password" => Hash::make("12345678"),
            "roles" => "ADMIN",
            "phone" => "08123456",
            "email_verified_at" => "now",
        ]);
    }
}
