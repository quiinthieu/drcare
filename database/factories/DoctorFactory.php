<?php

namespace Database\Factories;

use App\Models\Doctor;
use App\Models\DoctorType;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Storage;

class DoctorFactory extends Factory
{
    protected $model = Doctor::class;

    public function definition()
    {
         $id = $this->faker->numberBetween(1,28);
        return [
            'doctor_type_id' => function() {
                return DoctorType::factory()->create()->id;
            },
            'name' => $this->faker->firstName . ' ' . $this->faker->lastName,
            'photo' => 'storage/drcare/doctors/' . $id++ .'.png',
            'status' => $this->faker->numberBetween(0,1)
        ];
    }
}
