<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelperController extends Controller
{
    // app/Http/Controllers/HelperController.php
    public function arrayHelpers()
    {
        $data = [
            'user' => [
                'profile' => [
                    'name' => 'Djamal',
                    'age' => 26
                ],
                'roles' => ['admin', 'editor'],
            ],
            'status' => 'active'
        ];

        $results = [
            'array_get' => array_get($data, 'user.profile.name'),
            'array_has' => array_has($data, 'user.roles'),
            'array_only' => array_only($data['user'], ['profile']),
        ];

        array_set($results, 'array_set.location.city', 'Cotonou');

        return response()->json($results);
    }

    public function stringHelpers()
{
    $phrase = 'Laravel is a powerful PHP framework for web artisans.';

    $result = [
        'str_limit' => str_limit($phrase, 20),
        'str_finish' => str_finish('laravel/framework', '/'),
        'str_contains' => str_contains($phrase, 'PHP'),
        'str_slug' => str_slug('Laravel 5.5 Framework!')
    ];

    return response()->json($result);
}
public function debugHelpers()
{
    $user = ['name' => 'Djamal', 'age' => 26];

    dump($user); // S'affiche dans le navigateur
    // dd($user); // Stoppe l'exécution

    return 'Dump exécuté dans la console navigateur';
}

}
