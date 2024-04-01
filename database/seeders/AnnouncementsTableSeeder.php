<?php

namespace Database\Seeders;

use App\Models\Announcement;
use Illuminate\Database\Seeder;

class AnnouncementsTableSeeder extends Seeder
{
    public function run()
    {
        Announcement::factory()->count(50)->create();
    }
}
