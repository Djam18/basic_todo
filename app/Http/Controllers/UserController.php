<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{

public function store(Request $request)
{
    $request->validate([
        'name' => 'required',
        'email' => 'required|email',
        'password' => 'required|min:6'
    ]);

    $user = new \App\User();
    $user->name = $request->name;
    $user->email = $request->email;
    $user->password = Hash::make($request->password); // 🔐 hash sécurisé
    $user->save();

    return redirect()->route('users.index')->with('success', 'Utilisateur créé');
}
}
