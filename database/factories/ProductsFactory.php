<?php

namespace Database\Factories;
use App\Models\Products;
use Faker\Generator as Faker;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Products>
 */
class ProductsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Products::class;


    public function definition()
    {
        return [
            'name' =>  $this->faker->word(),
            'sugest_price' => $this->faker->numberBetween($min = 1, $max = 50000),
            'category' => $this->faker->randomElement(array("electronic", "tecnology", "house","culture_and_hoby",
                "style_and_wellness", "auto" )),
            'brand' =>  $this->faker->word(),
            'stock_quantity' => $this->faker->randomDigitNotNull()
        ];
    }
}
