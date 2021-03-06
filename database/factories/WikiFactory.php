<?php

namespace Database\Factories;

use App\Models\Wiki;
use Illuminate\Database\Eloquent\Factories\Factory;

class WikiFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Wiki::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'id_projecte' => rand(1,10),
            'nom' => $this->faker->sentence()
        ];
    }
}
