<?php

namespace Database\Factories;

use App\Models\Doctor;
use App\Models\DoctorType;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Storage;

class DoctorFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Doctor::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'doctor_type_id' => function() {
                return DoctorType::factory()->create()->id;
            },
            'name' => $this->faker->firstName . ' ' . $this->faker->lastName,
            'photo' => Storage::url('public/images/' . random_int(31, 44) . '.png'),
        ];
    }
}
