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
        return [
            'thumbnail' => Storage::url('public/images/' . random_int(1, 30) . '.png'),
            'title' => ucwords($this->faker->words(6, true)),
            'subtitle' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed cursus ante dapibus diam. Sed nisi. Nulla quis sem at nib.',
            'author' => $this->faker->lastName,
            'content' => json_encode($this->faker->paragraphs(20)),
            'published_at' => $this->faker->dateTimeBetween('-5 years', 'now')
        ];
    }
}
