<?php

namespace App\Http\Controllers;

use App\Models\Membre;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MembreController extends Controller
{
    function index() {
        $members = Membre::all();
        $hommes = DB::select("SELECT * FROM membres WHERE genre = 'Homme'");
        $femmes = DB::select("SELECT * FROM membres WHERE genre = 'Femme'");
        $hommesMajeurs = DB::select("SELECT * FROM membres WHERE genre ='Homme' AND age BETWEEN 18 AND 24 ");
        $femmesMajeurs = DB::select("SELECT * FROM membres WHERE genre ='Femme' AND age BETWEEN 18 AND 24 ");
        // $autres = DB::select("SELECT * FROM membres WHERE age < 18 OR age > 24");
        $autres = DB::select("SELECT * FROM membres WHERE age NOT BETWEEN 18 AND 24");
        return view('welcome', compact('members', 'hommes', 'femmes', 'hommesMajeurs', 'femmesMajeurs', 'autres'));
    }
}
