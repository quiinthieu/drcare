<?php

namespace Database\Seeders;

use App\Models\Doctor;
use App\Models\DoctorType;
use Illuminate\Database\Seeder;

class DoctorTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DoctorType::factory(7)->create()->each(function ($doctorType) {
            Doctor::factory(2)->create(['doctor_type_id' => $doctorType->id]);
        });
    }
}
