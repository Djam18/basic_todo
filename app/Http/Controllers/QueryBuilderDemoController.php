<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QueryBuilderDemoController extends Controller
{
    public function showActiveUsers()
    {
        $users = \Illuminate\Support\Facades\DB::table('users')
            ->where('active', true)
            ->get();

        return view('query.active_users', compact('users'));
    }
}
