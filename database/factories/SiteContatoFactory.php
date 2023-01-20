<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
//use \App\Models\SiteContato;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\SiteContato>
 */
class SiteContatoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nome' => fake()->name(),
            'email' => fake()->unique()->safeEmail(),
            'telefone' => now(),
            'motivo_contatos_id' => fake()->numberBetween(1,3),
            'mensagem' => fake()->text(200), // password
                 
        ];
    }
}
 