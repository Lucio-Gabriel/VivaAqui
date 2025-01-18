<?php

namespace Database\Factories;

use App\Models\House;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class HouseFactory extends Factory
{
    protected $model = House::class;
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence(3),
            'city' => $this->faker->city,
            'price' => $this->faker->numberBetween(100000, 500000),
            'email' => $this->faker->safeEmail,
            'description' => $this->faker->paragraph,
        ];
    }
}
