<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Leave>
 */
class LeaveFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'firstname' => $this->faker->firstName,
            'lastname' => $this->faker->lastName,
            'email' => $this->faker->email,
            'number' => $this->faker->phoneNumber,
            'gender' => $this->faker->randomElement(['Male', 'Female']),
            'maritalStatus' => $this->faker->randomElement(['Single', 'Married', 'Divorced']),
            'relationship' => $this->faker->randomElement(['Friend', 'Spouse', 'Sibling']),
            'country' => $this->faker->country,
            'language' => $this->faker->randomElement(['English', 'Spanish', 'French']),
            'alternateLanguage' => $this->faker->randomElement(['English', 'Spanish', 'French']),
            'soldierName' => $this->faker->name,
            'soldierId' => $this->faker->numerify('##########'), // Adjust to the required format
            'soldierEmail' => $this->faker->email,
            'currentState' => $this->faker->state,
            'soldierCountry' => $this->faker->country,
            'duration' => $this->faker->numberBetween(1, 12) . ' months',
        ];
    }
}
