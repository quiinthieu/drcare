<?php

namespace Database\Seeders;

use App\Models\Disease;
use App\Models\DiseaseType;
use Illuminate\Database\Seeder;

class DiseaseTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DiseaseType::factory(2)->create()->each(function ($diseaseType) {
            Disease::factory(4)->create(['disease_type_id' => $diseaseType->id]);
        });
    }
}
