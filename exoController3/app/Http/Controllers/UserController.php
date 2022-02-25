<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    function users() {
        $tabs = [
            (object)['id' => 0, 'nom' => 'Cactus', 'age' => 25, "email" => "Cactus@gmail.com"],
            (object)['id' => 1, 'nom' => 'Alixe', 'age' => 25, "email" => "Alixe@gmail.com"],
            (object)['id' => 2, 'nom' => 'Hedi', 'age' => 22, "email" => "Hedi@gmail.com"],
            (object)['id' => 3, 'nom' => 'Isma', 'age' => 22, "email" => "Isma@gmail.com"],
        ];
        return view('pages.users', compact('tabs'));
    }
}
