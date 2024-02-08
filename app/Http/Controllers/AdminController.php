<?php

namespace App\Http\Controllers;

use App\Models\Enfant;
use App\Models\User;

class AdminController extends Controller
{
    public function dashboard()
    {
        $totalEnfants = Enfant::count();
        $totalUsers = User::count();
        $totalParents = User::where('role_id', 3)->count();
        $totalAdmins = User::where('role_id', 1)->count();
        $totalStaffs = User::where('role_id', 2)->count();

        return view('admin.dashboard', compact('totalEnfants', 'totalUsers', 'totalParents', 'totalAdmins', 'totalStaffs'));
    }

    public function users()
    {
        $users = User::paginate(10); // 10 utilisateurs par page
        return view('admin.users', compact('users'));
    }

    public function createUser()
    {
        return view('admin.create_user');
    }
}
