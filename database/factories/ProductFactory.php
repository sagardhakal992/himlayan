<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model=Product::class;
    public function definition()
    {
        return [
          "title"=>$this->faker->unique()->text(50),
            "description"=>$this->faker->text(800),
            "price"=>2202.05,
            "category_id"=>rand(0,25)

        ];
    }
}
