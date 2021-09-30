<?php

namespace Database\Factories;

use App\Models\Services;
use Illuminate\Database\Eloquent\Factories\Factory;

class ServicesFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Services::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'Product_Model' => $this->faker->word,
        'Product_Issue' => $this->faker->word,
        'Service_Warranty_Code' => $this->faker->word,
        'Owner' => $this->faker->word,
        'Email' => $this->faker->word,
        'Contact_Number' => $this->faker->word,
        'Address' => $this->faker->word,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
