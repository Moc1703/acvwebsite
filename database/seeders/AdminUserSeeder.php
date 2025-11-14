<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create admin user if it doesn't exist
        User::firstOrCreate(
            ['email' => 'admin@acvmanagement.com'],
            [
                'name' => 'ACV Admin',
                'password' => Hash::make('admin123'), // Change this password in production!
                'email_verified_at' => now(),
            ]
        );
    }
}
