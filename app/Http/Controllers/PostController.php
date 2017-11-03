<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Gate;

class PostController extends Controller
{
    public function update(Post $post)
    {
        if (Gate::denies('update', $post)) {
            abort(403);
        }

        // Mettre à jour le post
        return "Post modifié par l'auteur.";
    }
}
