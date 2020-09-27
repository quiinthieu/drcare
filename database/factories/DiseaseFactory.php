<?php

namespace Database\Factories;

use App\Models\Disease;
use App\Models\DiseaseType;
use Illuminate\Database\Eloquent\Factories\Factory;

class DiseaseFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Disease::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'disease_type_id' => function() {
                return DiseaseType::factory()->create();
            },
            'name' => ucwords($this->faker->unique()->words(2, true)),
            'description' => $this->faker->paragraph,
            'statistics' => $this->faker->sentence,
            'causes' => $this->faker->sentence,
            'symptoms' => $this->faker->sentence,
            'preventions' => $this->faker->sentence
        ];
    }
}
