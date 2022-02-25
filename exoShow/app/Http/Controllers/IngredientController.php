<?php

namespace App\Http\Controllers;

use App\Models\Ingredient;
use Illuminate\Http\Request;

class IngredientController extends Controller
{
    public function index() {
        $ings = Ingredient::all();
        return view('welcome', compact('ings'));
    }

    public function store(Request $request) {
        $store = new Ingredient();
        $store -> name = $request -> name;
        $store -> quantity = $request -> quantity;
        $store -> path = $request -> path;
        $store -> save();
        return redirect('/');
    }

    public function show($id) {
        $show = Ingredient::find($id);
        return view('pages.show', compact('show'));
    }

    public function destroy($id) {
        $delete = Ingredient::find($id);
        $delete -> delete();
        return redirect('/');
    }
}
