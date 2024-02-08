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
        // utilise la policy pour vérifier si l'utilisateur peut voir tout les enfants
        $this->authorize('viewAny', Enfant::class);
        $enfants = Enfant::all();
        return response()->json($enfants);
    }

    //retourne un enfant par son ID
    public function getEnfantById(Request $request)
    {
        $enfantId = $request->input('id');
        $enfant = Enfant::findOrFail($enfantId);
        $this->authorize('view', $enfant);
        return response()->json($enfant);
    }
}
