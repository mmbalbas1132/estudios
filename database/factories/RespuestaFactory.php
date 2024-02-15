<?php

namespace Database\Factories;

use App\Models\Respuesta;
use Illuminate\Database\Eloquent\Factories\Factory;

class RespuestaFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Respuesta::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'respuesta' => $this->faker->sentence,
            'es_correcta' => $this->faker->boolean,
            'pregunta_id' => \App\Models\Pregunta::factory(),
        ];
    }
}
