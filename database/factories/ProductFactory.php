<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Storage;

class ProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Product::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        static $id = 1;
        return [
            'category_id' => function () {
                return Category::factory()->create()->id;
            },
            'name' => $this->faker->realText(25),
            'description' => $this->faker->realText(60),
            'price' => $this->faker->randomFloat(2, 0, 100),
            'photos' => json_encode([
                'storage/drcare/products/' . $id++ . '.png',
                'storage/drcare/products/' . $id++ . '.png'
            ]),
        ];
    }
}
