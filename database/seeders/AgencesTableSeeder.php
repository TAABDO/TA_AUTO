<?php

namespace Database\Seeders;

use App\Models\Agence;
use Illuminate\Database\Seeder;

class AgencesTableSeeder extends Seeder
{
    public function run()
    {
        Agence::factory()->count(5)->create();
    }
}
