<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\odel=Flight>
 */
class FlightFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "name"               => $this->faker->firstName,   
            "number"             => $this->faker->lastName,
            "email"              => $this->faker->email,
            "soldierName"        => $this->faker->name,
            "soldierId"          => $this->faker->numerify("############"),
            "soldierEmail"       => $this->faker->randomElement(['Male','Female']),
            "currentState"       => $this->faker->city,
            "country"            => $this->faker->country,
            "transitType"        => $this->faker->randomElement(['one way', 'round trip']),
            "state"              => $this->faker->city,
            "destinationCountry" => $this->faker->country,
            "endOfDeparture"     => $this->faker->dateTime,
            "flightClass"        => $this->faker->randomElement(['economy', 'first class', 'Business']),
            "numberOfAdults"     => $this->faker->numberBetween(1,6),
            "numberOfChildren"   => $this->faker->numberBetween(1,6),
        ];
    }
}
