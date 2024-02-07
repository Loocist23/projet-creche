<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Enfant;
use Illuminate\Http\Request;

class ApiEnfantsController extends Controller
{
    //liste tout les enfants
    public function index()
    {
        $enfants = Enfant::all();
        return response()->json($enfants);
    }

    //retourne un enfant par son ID
    public function getEnfantById(Request $request)
    {
        // Récupère l'ID de l'enfant à partir du paramètre de requête 'id'
        $enfantId = $request->query('id');

        // Trouve l'enfant par ID ou retourne une erreur 404 si non trouvé
        $enfant = Enfant::findOrFail($enfantId);

        // Retourne l'enfant en JSON
        return response()->json($enfant);
    }
}
