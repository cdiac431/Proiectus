<?php

namespace Database\Factories;

use App\Models\Mensaje;
use Illuminate\Database\Eloquent\Factories\Factory;

class MensajeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Mensaje::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'id_usuari' => rand(1,56),
            'id_xat' => rand(1,11),
            'estat_missatge' => $this->faker->randomElement(['Enviat', 'Rebut', 'Llegit']),
            'contingut' => $this->faker->paragraph()
        ];
    }
}
