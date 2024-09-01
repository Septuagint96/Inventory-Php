<?php

namespace Database\Factories;

use App\Models\Producto;
use App\Models\Categoria;
use App\Models\Proveedor;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductoFactory extends Factory
{
    protected $model = Producto::class;

    public function definition()
    {
        
        return [
            'nombre' => $this->faker->word(),
            'descripcion' => $this->faker->sentence(),
            'precio' => $this->faker->randomFloat(2, 1, 1000),
            'stock' => $this->faker->numberBetween(1, 100),
            'categoria_id' => Categoria::factory(),
            'proveedor_id' => Proveedor::factory(),
        ];
    }
}
