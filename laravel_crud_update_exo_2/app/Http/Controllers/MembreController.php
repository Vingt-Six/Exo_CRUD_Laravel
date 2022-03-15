<?php

namespace App\Http\Controllers;

use App\Models\Membre;
use Illuminate\Http\Request;

class MembreController extends Controller
{
    public function index() {
        $membres = Membre::all();
        $allsupp = Membre::truncate();
        return view('welcome', compact('membres', 'allsupp'));
    }

    public function create() {
        return view('pages.create');
    }

    public function store(Request $request) {
        $store = new Membre();
        $store -> nom = $request -> nom;
        $store -> age = $request -> age;
        $store -> genre = $request -> genre;
        $store -> save();
        return redirect('/');
    }

    public function show($id) {
        $show = Membre::find($id);
        return view('pages.show', compact('show'));
    }

    
    public function edit($id) {
        $edit = Membre::find($id);
        return view('pages.edit', compact('edit'));
    }
    
    public function update($id, Request $request) {
        $update = Membre::find($id);
        $update -> nom = $request -> nom;
        $update -> age = $request -> age;
        $update -> genre = $request -> genre;
        $update -> save();
        return redirect('/');
    }

    public function destroy($id) {
        $delete = Membre::find($id);
        $delete -> delete();
        return redirect('/');
    }

    public function destroyAll() {
        Membre::truncate();
        return redirect('/');
    }
}
