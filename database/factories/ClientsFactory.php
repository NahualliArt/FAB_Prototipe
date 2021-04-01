<?php

namespace Database\Factories;

use App\Models\Clients;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class ClientsFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Clients::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "user_id" => User::all()->random()->id,
            "business_name" => $this->faker->company,
            "business_category" => rand(1, 20),
            "business_subcategories" => "1, 4, 26, 5",
            "created_at" => now()
        ];
    }
}
