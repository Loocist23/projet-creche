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
        $planningId = $request->input('id');
        $planning = Planning::findOrFail($planningId);
        return response()->json($planning);
    }
}
