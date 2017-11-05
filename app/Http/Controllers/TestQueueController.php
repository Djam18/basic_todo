<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use App\Jobs\ProcessWelcomeEmail;

class TestQueueController extends Controller
{
    public function trigger()
    {
        $user = User::first(); // ou find(1) si tu veux
        ProcessWelcomeEmail::dispatch($user);

        return 'Job lancé !';
    }
}
