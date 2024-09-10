<?php

namespace App\Http\Controllers;

use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();

        return view('users.index', compact('users'));
    }

    public function check_update(string $name, string $email)
    {
        $user = User::updateOrCreate([ 
            'name' => $name,
        ], [
            'email' => $email,
            'password' => str()->password(),
        ]); 

        return $user->name;
    }
}
