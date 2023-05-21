<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Publication>
 */
class PublicationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'content' => $this->faker->paragraph,
            'publicationable_type' => $this->faker->randomElement(['App\Models\Tweet', 'App\Models\Facebook_message', 'App\Models\Instagram_post']),
            'publicationable_id' => function (array $attributes) {
                $publicationableType = $attributes['publicationable_type'];
                $publicationableModel = new $publicationableType;
                return $publicationableModel->all()->random()->id;}
        ];
    }
}
