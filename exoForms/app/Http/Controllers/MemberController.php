<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    function index() {
        $personnes = Member::all();
        return view('welcome', compact('personnes'));
    }

    function create() {
        return view('pages.inscription');
    }

    function store(Request $request) {
        $store = new Member();
        $store -> name = $request -> name;
        $store -> firstname = $request -> firstname;
        $store -> age = $request -> age;
        $store -> email = $request -> email;
        $store -> save();
        return redirect('/');
    }
}
