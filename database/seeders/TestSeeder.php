<?php

namespace Database\Seeders;

use App\Models\Test;
use Faker\Factory;
use Illuminate\Database\Seeder;

class TestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Test::factory()
            ->count(50)
            ->create();

    }
}
