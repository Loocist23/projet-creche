<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Planning;
use Illuminate\Http\Request;

class ApiPlanningsController extends Controller
{
    //liste tout les plannings
    public function index()
    {
        $plannings = Planning::all();
        return response()->json($plannings);
    }

    //retourne un planning par son ID
    public function getPlanningById(Request $request)
    {
        // Récupère l'ID du planning à partir du paramètre de requête 'id'
        $planningId = $request->query('id');

        // Trouve le planning par ID ou retourne une erreur 404 si non trouvé
        $planning = Planning::findOrFail($planningId);

        // Retourne le planning en JSON
        return response()->json($planning);
    }
}
