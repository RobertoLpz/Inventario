<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\categorias>
 */
class CategoriaFactory extends Factory
{
  
    public function definition()
    {
        return [
            'sku' =>$this->faker->regexify('[A-Za-z0-9]{20}'),
            'descripcion' => $this->faker->text(20)
        ];
    }
}
