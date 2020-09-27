<?php

namespace Database\Factories;

use App\Models\Testing;
use Illuminate\Database\Eloquent\Factories\Factory;

class TestingFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Testing::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->words(2, true),
            'description' => $this->faker->text,
            'causes' => json_encode([
                'name' => $this->faker->name,
                'address' => $this->faker->address
            ]),
            'symptoms' => json_encode([
                'name' => $this->faker->name,
                'address' => $this->faker->address
            ]),
            'preventions' => json_encode([
                'name' => $this->faker->name,
                'address' => $this->faker->address
            ])
        ];
    }
}
