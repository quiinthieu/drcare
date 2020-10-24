<?php

namespace Database\Factories;

use App\Models\Research;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Storage;

class ResearchFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Research::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
         $id =  $this->faker->numberBetween(1,30);
        return [
            'thumbnail' => 'storage/drcare/research/' . $id++ . '.png',
      
            'title' => $this->faker->realText(15),
            'subtitle' => $this->faker->realText(60),
            'author' => $this->faker->firstName . ' ' . $this->faker->lastName ,
            'content' => json_encode($this->faker->paragraphs(20)),
            'published_at' => $this->faker->dateTimeBetween('-5 years', 'now'),
            'status' => $this->faker->numberBetween(0,1)
        ];
    }
}
