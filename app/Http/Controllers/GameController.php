<?php

namespace App\Http\Controllers;

use App\Http\Requests\GameStoreRequest;
use App\Http\Requests\GameUpdateRequest;
use App\Models\Game;
use Illuminate\Http\Request;

class GameController extends Controller
{
    public function index()
    {
        $data['games'] = Game::orderBy('id', 'DESC')->get();

        return view('games.index', $data);
    }

    public function create()
    {
        return view('games.create');
    }

    public function store(GameStoreRequest $request)
    {
        $game = Game::create($request->all());

        return redirect()->route('games.index')->with('info', 'Game added!');
    }


    public function edit(Game $game)
    {
        $data['game'] = $game;

        return view('games.edit', $data);
    }

    public function update(GameUpdateRequest $request, $id)
    {
        $game = Game::find($id);

        $game->update($request->all());

        return redirect()->route('games.index')
            ->with('info', 'Game updated!');
    }

    public function destroy($id)
    {
        $game = Game::find($id);

        $game->delete();

        return redirect()->route('games.index')
            ->with('info', 'Game deleted!');
    }
}
