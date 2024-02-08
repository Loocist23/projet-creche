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
        $ownerId = $request->input('id');
        $owner = Owner::findOrFail($ownerId);
        return response()->json($owner);
    }
}
