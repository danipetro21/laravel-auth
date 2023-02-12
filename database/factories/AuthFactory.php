<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class AuthFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => fake() -> word(), 
            'description' => fake() -> paragraph(2), 
            'relase_date' => fake() -> dateTime(), 
            'repo_link' => fake() -> url(), 
        ];
    }
}
