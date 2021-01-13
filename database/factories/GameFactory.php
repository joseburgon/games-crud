<?php

namespace Database\Factories;

use App\Models\Game;
use Illuminate\Database\Eloquent\Factories\Factory;

class GameFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Game::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->sentence(2),
            'game_url' => $this->faker->url,
            'description' => $this->faker->paragraph(3),
            'image_url' => $this->faker->imageUrl(),
            'status' => array_rand(['running', 'down'], 1),
        ];
    }
}
