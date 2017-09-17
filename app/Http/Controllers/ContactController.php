<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function create()
    {
        return view('contact');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nom' => 'required|min:3',
            'email' => 'required|email',
            'message' => 'required|min:10',
        ]);

        // Simulation de traitement (ex: envoi email, sauvegarde...)
        return back()->with('success', 'Votre message a bien été reçu.');
    }
}
