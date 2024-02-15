<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Asignatura;

class AsignaturaFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Asignatura::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nombre' => $this->faker->sentence(3),
            'descripcion' => $this->faker->paragraph,
        ];
    }
}

//En este código, estamos utilizando el generador Faker para generar datos de prueba para las propiedades nombre y descripcion de Asignatura. El método sentence(3) genera una frase de 3 palabras para el nombre de la asignatura y el método paragraph genera un párrafo para la descripción de la asignatura.
