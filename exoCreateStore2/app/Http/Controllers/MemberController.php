<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    function index() {
        $members = Member::all();
        $femmes = Member::where('gender', '=', 'Femme')->get();
        $hommes = Member::where('gender', '=', 'Homme')->get();
        return view('welcome', compact('members', 'femmes', 'hommes'));
    }

    function create() {
        return view('pages.addgens');
    }

    function store(Request $request) {
        $store = new Member();
        $store -> name = $request -> name;
        $store -> gender = $request -> gender;
        $store -> email = $request -> email;
        $store -> age = $request -> age;
        $store -> save();
        return redirect('/');
    }

    function destroy($id) {
        $delete = Member::find($id);
        $delete -> delete();
        return redirect('/');
    }
}
