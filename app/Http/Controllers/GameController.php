<?php

namespace App\Http\Controllers;

use App\Models\Game;
use Illuminate\Http\Request;

class GameController extends Controller
{
    public function showGame(){
        return view('game.all',[
           'title' => 'Halaman All game',
            'game' => Game::all()
        ]);
    }

    public function detailGame(string $id){
        return view('game.detail',[
            'title' => 'Halaman Detail game',
            'game' => Game::findOrFail($id)
        ]);
    }

}
