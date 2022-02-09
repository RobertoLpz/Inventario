<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\productos>
 */
class ProductoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'id_categoria' =>$this->faker->numberBetween($min = 1, $max = 10),
            'sku' => $this->faker->regexify('[A-Za-z0-9]{20}'),
            'nombre' => $this->faker->name(),
            'descripcion' => $this->faker->text(20),
            'precio' => $this->faker->numberBetween($min = 0, $max = 9000),
            'cantidad' => $this->faker->numberBetween($min = 0, $max = 900),
            'calificacion' =>$this->faker->numberBetween($min = 1, $max = 5),
            'estado' => $this->faker->randomElement(['Con inventario', 'Sin inventario']),
        ];
    }
}
