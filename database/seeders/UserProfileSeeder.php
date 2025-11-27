<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\UserProfile;

class UserProfileSeeder extends Seeder
{
    public function run(): void
    {
        // Create 20 user profiles with attached users & pictures
        UserProfile::factory()->count(20)->create();
    }
}
