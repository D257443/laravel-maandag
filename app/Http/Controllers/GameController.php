<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Game;

class GameController extends Controller
{
    // Show all games
    public function index() {
        $games = Game::all();

        //dd($games); // dump & die

        return view('games/index')
            ->with('games', $games);
    }

    // Show a single game
    public function show($id) {
        // Data van game verzamelen op basis van id
        $game = Game::find($id);

        // Return de view met data
        return view('games/show')
            ->with('game', $game);
    }

}
