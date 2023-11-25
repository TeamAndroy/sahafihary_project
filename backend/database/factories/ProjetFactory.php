<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Projet>
 */
class ProjetFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'code_projet' => fake()->unique()->numerify('PR_###'),
            'nom_projet' => fake()->sentence(3),
            'duree' => fake()->numberBetween(1, 24),
            'date_debut' => fake()->dateTimeBetween('-1 year', 'now'),
            'date_fin' => fake()->dateTimeBetween('now', '+1 year'),
            'etat' => fake()->randomElement(['fini', 'encours', 'non_execute']),
            'objectif' => fake()->paragraph(3),
        ];
    }
}
