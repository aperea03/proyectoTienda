<?php

namespace Database\Factories;

use App\Models\Producto;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Producto>
 */
class ProductoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Producto::class;


    public function definition()
    {
        return [
            'name' => $this->faker->sentence(2),
            'descripcion' => $this->faker->paragraph(),
            'categoria' => $this->faker->randomElement(['Shisha','Pod','Accesorios']),
            'precio' => $this->faker->randomFloat($nbMaxDecimals = 2, $min = 4, $max = 200),
            'image' => 'https://picsum.photos/600/400',
            
            // $this->faker->imageUrl($width = 600, $height = 400)
        ];
    }
}
