<?php

namespace Tests\Feature;

use App\Models\Game;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class GameControllerTest extends TestCase
{
    use RefreshDatabase;

    public function test_index()
    {
        $this->actingAs($user = User::factory()->create());

        $response = $this->get('/games');

        $response->assertStatus(200);
    }

    public function test_store()
    {
        $this->withoutExceptionHandling();

        $this->actingAs($user = User::factory()->create());

        $response = $this->post('/games', [
            'name' => 'Game One',
            'game_url' => 'https://latamwin-gp3.discreetgaming.com/game-one',
            'description' => 'This is a valid test description for a fictional game. This game is awesome.',
            'image_url' => 'https://winchiletragamonedas.com/public/images/games/game-one.jpeg',
            'status' => 'running',
        ]);

        $this->assertCount(1, Game::all());

        $game = Game::first();

        $this->assertEquals($game->name, 'Game One');
        $this->assertEquals($game->game_url, 'https://latamwin-gp3.discreetgaming.com/game-one');
    }

    public function test_update()
    {
        $this->withoutExceptionHandling();

        $this->actingAs($user = User::factory()->create());

        $game = Game::factory()->create();

        $newAttributes = [
            'name' => 'New Game Name',
            'game_url' => 'https://newurl.test',
            'description' => 'This is a new valid test description for a fictional game. This game is awesome.',
            'image_url' => 'https://new-image.test/public/images/games/new-game.jpeg',
            'status' => 'down',
        ];

        $response = $this->put("/games/{$game->id}", $newAttributes);

        $game->refresh();

        $this->assertEquals('New Game Name', $game->name);
        $this->assertEquals('https://newurl.test', $game->game_url);

        $response->assertRedirect('/games');
        $response->assertSessionHas('info');
    }

    public function test_destroy()
    {
        $this->withoutExceptionHandling();

        $this->actingAs($user = User::factory()->create());

        $game = Game::factory()->create();

        $response = $this->delete("/games/{$game->id}");

        $this->assertDatabaseMissing('games', [
            'id' => $game->id
        ]);

        $response->assertRedirect('/games');
    }
}
