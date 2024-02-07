<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Menu;
use Illuminate\Http\Request;

class ApiMenusController extends Controller
{
    //liste tout les menus
    public function index()
    {
        $menus = Menu::all();
        return response()->json($menus);
    }

    //retourne un menu par son ID
    public function getMenuById(Request $request)
    {
        // Récupère l'ID du menu à partir du paramètre de requête 'id'
        $menuId = $request->query('id');

        // Trouve le menu par ID ou retourne une erreur 404 si non trouvé
        $menu = Menu::findOrFail($menuId);

        // Retourne le menu en JSON
        return response()->json($menu);
    }
}
