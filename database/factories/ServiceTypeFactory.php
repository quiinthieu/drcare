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
            1 => array('General', 300),
            2 => array('Cosmetic', 500),
            3 => array('Surgical', 700),
            4 => array('Complete Health', 1000)
        ];
        static $id = 1;
        return [
            'name' => $serviceTypes[$id][0],
            'description' => $this->faker->realText(60),
            'price' => $serviceTypes[$id++][1],
        ];
    }
}
