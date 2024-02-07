<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class ApiUserController extends Controller
{
    //on return la liste des utilisateurs
    public function index()
    {
        $users = User::all()->makeHidden(['created_at', 'updated_at', 'role_id', 'two_factor_secret', 'two_factor_recovery_codes', 'two_factor_confirmed_at', 'email_verified_at']);
        return response()->json($users);
    }

    public function getUserById(Request $request)
    {
        // Récupère l'ID de l'utilisateur à partir du paramètre de requête 'id'
        $userId = $request->query('id');

        // Trouve l'utilisateur par ID ou retourne une erreur 404 si non trouvé
        $user = User::findOrFail($userId);

        // Retourne l'utilisateur en JSON
        return response()->json($user);
    }
    public function getUserByUsername(Request $request)
    {
        // Récupère le username de l'utilisateur à partir du paramètre de requête 'username'
        $username = $request->query('username');

        // Trouve l'utilisateur par username ou retourne une erreur 404 si non trouvé
        $user = User::where('username', $username)->firstOrFail();

        // Retourne l'utilisateur en JSON
        return response()->json($user);
    }


}
