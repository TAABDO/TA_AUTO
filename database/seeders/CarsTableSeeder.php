<?php

namespace Database\Seeders;

use App\Models\Car;
use Illuminate\Database\Seeder;

class CarsTableSeeder extends Seeder
{
    public function run()
    {
        Car::factory()->count(50)->create();
    }
}
