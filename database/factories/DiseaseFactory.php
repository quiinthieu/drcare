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
                return DiseaseType::factory()->create()->id;
            },
            'name' => $this->faker->realText(10),
            'description' => $this->faker->realText(100),
            'statistics' => $this->faker->realText(100),
            'causes' => $this->faker->realText(100),
            'symptoms' => $this->faker->realText(100),
            'preventions' => $this->faker->realText(100),
            'status' => $this->faker->numberBetween(0,1)
        ];
    }
}
