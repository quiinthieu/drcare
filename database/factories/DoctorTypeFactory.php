<?php

namespace Database\Factories;

use App\Models\DoctorType;
use Illuminate\Database\Eloquent\Factories\Factory;

class DoctorTypeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = DoctorType::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->unique()->randomElement(['General Dentist', 'Pedodontist', 'Orthodontist', 'Periodontist', 'Endodontist', 'Oral Pathologist', 'Prosthodontist']),
        ];
    }
}
