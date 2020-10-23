<?php

namespace Database\Factories;

use App\Models\Service;
use App\Models\ServiceType;
use Illuminate\Database\Eloquent\Factories\Factory;

class ServiceFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Service::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'service_type_id' => function () {
                return ServiceType::factory()->create()->id;
            },
            'name' => $this->faker->realText(20),
            'status' => $this->faker->numberBetween(0,1)
        ];
    }
}
