<?php


namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Product;

class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $product_name = $this->faker->unique()->words($nb=2, $asText=true);
        $categories = ['Skin care', 'Arts', 'Hair Care'];

        return [
            'name' => $product_name,
            'description' => $this->faker->text(50),
            'price' => $this->faker->numberBetween(10, 500),
            'image' => 'product-' . $this->faker->numberBetween(1, 10) . '.jpg',
            'category' => $this->faker->randomElement($categories),
        ];
    }
}
