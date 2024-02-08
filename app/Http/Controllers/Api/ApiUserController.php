<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\Api\UserCollection;
use App\Http\Resources\Api\UserResource;
use App\Models\User;
use Illuminate\Http\Request;

class ApiUserController extends Controller
{
    // Retourne la liste des utilisateurs
    public function index()
    {
        $this->authorize('viewAny', User::class);
        $users = User::all();
        return new UserCollection($users);
    }

    // Retourne un utilisateur par son ID
    public function getUserById(Request $request)
    {
        $userId = $request->input('id');
        $user = User::findOrFail($userId);
        $this->authorize('view', $user);
        return new UserResource($user);
    }

    // Retourne un utilisateur par son username
    public function getUserByUsername(Request $request)
    {
        $username = $request->input('username');
        $user = User::where('username', $username)->firstOrFail();
        $this->authorize('view', $user);
        return new UserResource($user);
    }
}
