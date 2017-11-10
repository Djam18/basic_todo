<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\User;
use App\Profile;

class TransactionDemoController extends Controller
{
    //
    public function createUserWithProfile()
{
    DB::beginTransaction();

    try {
        $user = User::create([
            'name' => 'Test User',
            'email' => 'test@example.com',
            'password' => bcrypt('secret'),
        ]);

        // Simule une erreur (ex: null ici va casser le champ user_id obligatoire)
        Profile::create([
            'user_id' => $user->id,
            'bio' => 'Développeur Laravel'
        ]);

        DB::commit();
        return 'Utilisateur et profil créés avec succès';
    } catch (\Exception $e) {
        DB::rollBack();
        return 'Erreur : ' . $e->getMessage();
    }
}
}
