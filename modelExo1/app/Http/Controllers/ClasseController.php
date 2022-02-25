<?php

namespace App\Http\Controllers;

use App\Models\Classe;
use Illuminate\Http\Request;

class ClasseController extends Controller
{
    function classe() {
        $classes = Classe::all();
        return view('pages.classe', compact('classes'));
    }
}
