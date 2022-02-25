<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;

class CarController extends Controller
{
    public function index() {
        $cars = Car::all();
        return view('welcome', compact('cars'));
    }

    public function create() {
        return view('pages.rajouter');
    }

    public function store(Request $request) {
        $store = new Car();
        $store -> brand = $request -> brand;
        $store -> year = $request -> year;
        $store -> color = $request -> color;
        $store -> price = $request -> price;
        $store -> sale = $request -> sale;
        $store -> save();
        return redirect('/');
    }

    public function destroy($id) {
        $delete = Car::find($id);
        $delete -> delete();
        return redirect('/');
    }
}
