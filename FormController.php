<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    public function handle(Request $request)
    {
        return 'Données reçues : ' . $request->input('name');
    }
}
