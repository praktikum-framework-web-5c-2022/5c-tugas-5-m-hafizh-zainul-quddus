<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Matkul;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Matkul::factory()->count(39)->create();
    }
}
