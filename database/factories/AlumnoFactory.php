<?php

namespace Database\Factories;

use App\Models\Alumno;
use Illuminate\Database\Eloquent\Factories\Factory;

class AlumnoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Alumno::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nombre' => $this->faker->word,
        'apellido' => $this->faker->word,
        'edad' => $this->faker->randomDigitNotNull,
        'ci' => $this->faker->randomDigitNotNull,
        'telefono' => $this->faker->word,
        'direccion' => $this->faker->word,
        'email' => $this->faker->word,
        'profesion' => $this->faker->word,
        'genero' => $this->faker->word,
        'fecha_nac' => $this->faker->date('Y-m-d H:i:s'),
        'curso_id' => $this->faker->randomDigitNotNull,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
