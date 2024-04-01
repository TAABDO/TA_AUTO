<?php

namespace Database\Factories;

use App\Models\Agence;
use Illuminate\Database\Eloquent\Factories\Factory;

class AgenceFactory extends Factory
{
    protected $model = Agence::class;

    public function definition()
    {
        return [
            'name' => $this->faker->company,
            'location' => $this->faker->address,
            'type' => $this->faker->randomElement(['SelleAgence', 'RentAgence']),
        ];
    }
}
