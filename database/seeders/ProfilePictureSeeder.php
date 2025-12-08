<?php

namespace Database\Seeders;

use Database\Factories\ProfilePictureFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\ProfilePicture;


class ProfilePictureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ProfilePicture::factory()->count(20)->create();
    }
}
