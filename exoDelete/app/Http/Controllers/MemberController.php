<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    public function index() {
        $members = Member::all();
        return view('welcome', compact('members'));
    }

    public function man() {
        $mans = Member::where('gender', '=', 'Homme')->take(15)->get();
        return view('pages.hommes', compact('mans'));
    }

    public function woman() {
        $womans = Member::where('gender', '=', 'Femme')->get();
        return view('pages.femmes', compact('womans'));
    }

    public function create() {
        return view('pages.addpeople');
    }

    public function store(Request $request) {
        $store = new Member();
        $store -> name = $request -> name;
        $store -> age = $request -> age;
        $store -> gender = $request -> gender;
        $store -> save();
        return redirect('/');
    }

    public function destroy($id) {
        $delete = Member::find($id);
        $delete -> delete();
        return redirect('/');
    }
}
