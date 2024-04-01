<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Announcement;
use Illuminate\Database\Eloquent\Factories\Factory;

class AnnouncementFactory extends Factory
{
    protected $model = Announcement::class;

    public function definition()
    {
        return [
            'price' => $this->faker->randomFloat(2, 100, 10000),
            'title' => $this->faker->sentence,
            'description' => $this->faker->paragraph,
            'situation' => $this->faker->randomElement(['available', 'sold', 'rented']),
            'type' => $this->faker->randomElement(['rentel', 'sale']),
            'status' => $this->faker->randomElement(['accepted', 'rejected', 'pending']),
            'user_id' => User::factory(),
        ];
    }
}
