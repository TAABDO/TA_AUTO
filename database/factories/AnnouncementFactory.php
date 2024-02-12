<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Announcement>
 */
class AnnouncementFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [

            'price'=>fake()->price,
            'titel'=>fake()->titel,
            'description'=>fake()->description,
            'datePublication'=>fake()->datePublication,
            'model'=>fake()->model,
            'image'=>fake()->image,
            'situation'=>fake()->situation,
            'seats'=>fake()->seats,
            'km'=>fake()->km,
            'type'=>fake()->type,
           
        ];
    }
}
