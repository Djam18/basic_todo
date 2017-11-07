<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ResumeController extends Controller
{

    public function uploadCV(Request $request)
    {
        $path = $request->file('cv')->store('cvs', 'public');

        return back()->with('success', 'CV sauvegardé dans : ' . $path);
    }
    }
