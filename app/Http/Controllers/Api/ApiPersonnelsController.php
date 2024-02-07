<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Personnel;
use Illuminate\Http\Request;

class ApiPersonnelsController extends Controller
{
    //liste tout les personnels
    public function index()
    {
        $personnels = Personnel::all();
        return response()->json($personnels);
    }

    //retourne un personnel par son ID
    public function getPersonnelById(Request $request)
    {
        // Récupère l'ID du personnel à partir du paramètre de requête 'id'
        $personnelId = $request->query('id');

        // Trouve le personnel par ID ou retourne une erreur 404 si non trouvé
        $personnel = Personnel::findOrFail($personnelId);

        // Retourne le personnel en JSON
        return response()->json($personnel);
    }
}
