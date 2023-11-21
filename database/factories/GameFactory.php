<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Game>
 */
class GameFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'img' => './images/cod.jpg',
            'nama' => 'sembarang',
            'rate' => 4.5,
            'desc' => '
             Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque blanditiis corporis culpa deserunt doloremque explicabo modi officiis ut, vero voluptatum! Accusamus dicta eveniet facilis incidunt molestias quibusdam quisquam recusandae repellat.',
            'rilis' => now(),

        ];




    }
}
