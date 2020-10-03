<?php

namespace Database\Factories;

use App\Models\ServiceType;
use Illuminate\Database\Eloquent\Factories\Factory;

class ServiceTypeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = ServiceType::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $serviceTypes = [
            1 => 'General',
            2 => 'Cosmetic',
            3 => 'Surgical',
            4 => 'Complete Health'
        ];
        static $id = 1;
        return [
            'name' => $serviceTypes[$id++],
            'description' => $this->faker->realText(60)
        ];
    }
}
