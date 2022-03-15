<?php

namespace App\Http\Controllers;

use App\Models\Animal;
use Illuminate\Http\Request;

class AnimalController extends Controller
{
    public function index() {
        $animals = Animal::all();
        return view('welcome', compact('animals'));
    }

    public function create() {
        return view('pages.form');
    }

    public function store(Request $request) {
        $store = new Animal();
        $store -> gender = $request -> gender;
        $store -> age = $request -> age;
        $store -> save();
        return redirect('/');
    }

    public function show($id) {
        $show = Animal::find($id);
        return view('pages.show.show', compact('show'));
    }

    public function edit($id) {
        $edit = Animal::find($id);
        return view('pages.edit', compact('edit'));
    }

    public function update($id, Request $request) {
        $update = Animal::find($id);
        $update -> gender = $request -> gender;
        $update -> age = $request -> age;
        $update -> save();
        return redirect('/');
    }

    public function destroy($id) {
        $delete = Animal::find($id);
        $delete -> delete();
        return redirect('/');
    }
}
