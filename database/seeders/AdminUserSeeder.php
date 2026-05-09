<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::updateOrCreate(
            ['email' => 'admin@worldgrexpo.com'],
            [
                'name' => 'Master Admin',
                'password' => Hash::make('Worldgrexpo@1457'),
                'company_name' => 'World Grexpo Official',
                'designation' => 'System Administrator',
                'phone_number' => '+910000000000',
                'industry_sector' => 'Technology & IT',
                'membership_status' => 'active',
                'email_verified_at' => now(),
                'role' => 'admin'
            ]
        );
    }
}
