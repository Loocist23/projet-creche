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
        $nouvelleId = $request->input('id');
        $nouvelle = News::findOrFail($nouvelleId);
        return response()->json($nouvelle);
    }
}
