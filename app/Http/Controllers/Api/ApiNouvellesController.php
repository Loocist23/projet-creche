<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\News;
use Illuminate\Http\Request;

class ApiNouvellesController extends Controller
{
    //liste tout les nouvelles
    public function index()
    {
        $nouvelles = News::all();
        return response()->json($nouvelles);
    }

    //retourne une nouvelle par son ID
    public function getNouvelleById(Request $request)
    {
        // Récupère l'ID de la nouvelle à partir du paramètre de requête 'id'
        $nouvelleId = $request->query('id');

        // Trouve la nouvelle par ID ou retourne une erreur 404 si non trouvé
        $nouvelle = News::findOrFail($nouvelleId);

        // Retourne la nouvelle en JSON
        return response()->json($nouvelle);
    }
}
