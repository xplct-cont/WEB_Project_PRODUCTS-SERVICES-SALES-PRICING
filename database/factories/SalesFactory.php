<?php

namespace Database\Factories;

use App\Models\Sales;
use Illuminate\Database\Eloquent\Factories\Factory;

class SalesFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Sales::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'Sold_Product_Brand' => $this->faker->word,
        'Sold_Product_Model' => $this->faker->word,
        'Date_Sold' => $this->faker->word,
        'Customer_Name' => $this->faker->word,
        'Contact_Number' => $this->faker->word,
        'Product_Warranty_Code' => $this->faker->word,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
