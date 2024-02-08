<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePersonnelRequest;
use App\Http\Requests\UpdatePersonnelRequest;
use App\Models\Personnel;
use Illuminate\Http\Client\Request;

class PersonnelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $searchTerm = $request->get('search');

        $personnels = Personnel::when($searchTerm, function ($query) use ($searchTerm) {
            return $query->where(function($query) use ($searchTerm) {
                $query->where('nom', 'LIKE', "%{$searchTerm}%")
                    ->orWhere('prenom', 'LIKE', "%{$searchTerm}%")
                    ->orWhere('email', 'LIKE', "%{$searchTerm}%")
                    ->orWhere('poste', 'LIKE', "%{$searchTerm}%");
                // Ajoutez d'autres champs de recherche si nécessaire
            });
        })->paginate(10); // Modifiez le nombre selon vos besoins

        return view('admin.staffs.index', compact('personnels'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.staffs.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePersonnelRequest $request)
    {
        Personnel::create($request->validated());
        return redirect()->route('admin.staffs.index')->with('success', 'Membre du personnel ajouté avec succès.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Personnel $personnel)
    {
        return view('admin.staffs.show', compact('personnel'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Personnel $personnel)
    {
        return view('admin.staffs.edit', compact('personnel'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePersonnelRequest $request, Personnel $personnel)
    {
        $personnel->update($request->validated());
        return redirect()->route('admin.staffs.index')->with('success', 'Membre du personnel mis à jour avec succès.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Personnel $personnel)
    {
        $personnel->delete();
        return redirect()->route('admin.staffs.index')->with('success', 'Membre du personnel supprimé avec succès.');
    }
}
