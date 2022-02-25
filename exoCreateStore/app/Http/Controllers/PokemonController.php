<?php

namespace App\Http\Controllers;

use App\Models\Pokemon;
use Illuminate\Http\Request;

class PokemonController extends Controller
{
    function index() {
        $pokemons = Pokemon::all();
        return view('welcome', compact('pokemons'));
    }

    function create() {
        return view('pages.createPokemon');
    }

    function store(Request $request) {
        $store = new Pokemon();
        $store -> name = $request -> name;
        $store -> type = $request -> type;
        $store -> level = $request -> level;
        $store -> save();
        $store = dd($store);
        return redirect('/');
    }
}
