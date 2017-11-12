<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;

class UserListController extends Controller
{
    public function index()
    {
        $users = User::paginate(10); // 👈 paginate ici

        return view('users.index', compact('users'));
    }
}
