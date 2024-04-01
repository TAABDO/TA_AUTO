<?php

namespace Database\Factories;

use App\Models\Car;
use App\Models\User;
use App\Models\Brand;
use App\Models\Announcement;
use Illuminate\Database\Eloquent\Factories\Factory;

class CarFactory extends Factory
{
    protected $model = Car::class;

    public function definition()
    {
        return [
            'color' => $this->faker->safeColorName,
            'model' => $this->faker->randomElement(['Model S', 'Model 3', 'Model X', 'Model Y']),
            'seat' => $this->faker->numberBetween(2, 7),
            'km' => $this->faker->numberBetween(0, 200000),
            'year' => $this->faker->year,
            'situation' => $this->faker->randomElement(['available', 'sold','rented']),
            'transmission' => $this->faker->randomElement(['manual', 'automatic']),
            'fuel_type' => $this->faker->randomElement(['gasoline', 'diesel', 'electric']),
            'engine_capacity' => $this->faker->randomFloat(2, 1, 5),
            'brand_id' => Brand::factory(),
            'annoncement_id' => Announcement::factory(),
            'user_id' => User::factory(),
        ];
    }
}
