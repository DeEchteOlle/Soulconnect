<?php

namespace Database\Factories;

use App\Enums\Gender;
use App\Models\User;
use App\Models\ProfilePicture;
use Illuminate\Database\Eloquent\Factories\Factory;

class UserProfileFactory extends Factory
{
    public function definition(): array
    {
        return [
            'users_id' => User::factory(),  // Automatically create a linked User when needed
            'profile_pictures_id' => ProfilePicture::factory(), // Create a picture if not provided

            'one_liner' => $this->faker->sentence(6),

            // JSON fields — store arrays or text, depending on your DB setup
            'relation_values' => json_encode($this->faker->words(5)),

            'partner_qualities' => json_encode($this->faker->words(5)),

          'gender' => $this->faker->randomElement(Gender::cases())->value,


            'gender_preference' => $this->faker->randomElement([
                'man',
                'vrouw',
                'anders'
            ]),

            'date_of_birth' => $this->faker->dateTimeBetween('-40 years', '-18 years'),

            'zipcode' => $this->faker->postcode(),

            'has_pets' => $this->faker->boolean(30), // 30% chance of having pets
        ];
    }
}
