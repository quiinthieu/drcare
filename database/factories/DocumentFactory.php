<?php

namespace Database\Factories;

use App\Models\Document;
use Illuminate\Database\Eloquent\Factories\Factory;

class DocumentFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Document::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->randomElement(['Implications of WHO Guideline on Sugars for dental health professionals', 'Sugars and dental caries', 'A guide for oral disease patients to quit tobacco use', 'Consultation on Public Health Intervention against Early Childhood Caries']),
            'subtitle' => $this->faker->realText(100),
            'author' => $this->faker->name,
            'type' => $this->faker->randomElement(['Hardcover', 'Paperback', 'Loose Leaf', 'eBook'])
        ];
    }
}
