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
        $menuId = $request->input('id');
        $menu = Menu::findOrFail($menuId);
        return response()->json($menu);
    }
}
