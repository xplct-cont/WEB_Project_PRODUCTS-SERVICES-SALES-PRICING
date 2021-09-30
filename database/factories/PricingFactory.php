<?php

namespace Database\Factories;

use App\Models\Pricing;
use Illuminate\Database\Eloquent\Factories\Factory;

class PricingFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Pricing::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'Product_Model' => $this->faker->word,
        'Product_Price' => $this->faker->word,
        'Product_Discount' => $this->faker->word,
        'Start_Of_Sale' => $this->faker->word,
        'End_Of_Sale' => $this->faker->word,
        'Warranty_Code' => $this->faker->word,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
