<?php

namespace Database\Factories;

use App\Models\DiseaseType;
use Illuminate\Database\Eloquent\Factories\Factory;

class DiseaseTypeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = DiseaseType::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->unique()->randomElement(['Oral Diseases', 'Dental Diseases']),
            'description' => $this->faker->paragraph
        ];
    }
}
