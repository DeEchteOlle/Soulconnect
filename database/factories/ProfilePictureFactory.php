<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProfilePictureFactory extends Factory
{
    public function definition(): array
    {
        return [
            'users_id' => \App\Models\User::factory(),
            'file_path' => 'users_id/default.jpg',  
        ];
    }
}
