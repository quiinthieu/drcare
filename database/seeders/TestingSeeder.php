<?php

namespace Database\Seeders;

use App\Models\Testing;
use Illuminate\Database\Seeder;

class TestingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Testing::factory(4)->create();
    }
}
