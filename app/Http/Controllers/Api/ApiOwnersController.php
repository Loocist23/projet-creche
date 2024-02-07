<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Owner;
use Illuminate\Http\Request;

class ApiOwnersController extends Controller
{
    //liste tout les propriétaires
    public function index()
    {
        $owners = Owner::all();
        return response()->json($owners);
    }

    //retourne un propriétaire par son ID
    public function getOwnerById(Request $request)
    {
        // Récupère l'ID du propriétaire à partir du paramètre de requête 'id'
        $ownerId = $request->query('id');

        // Trouve le propriétaire par ID ou retourne une erreur 404 si non trouvé
        $owner = Owner::findOrFail($ownerId);

        // Retourne le propriétaire en JSON
        return response()->json($owner);
    }
}
