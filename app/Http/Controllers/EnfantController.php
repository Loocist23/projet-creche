<?php

namespace App\Http\Controllers;

use App\Models\Enfant;
use App\Http\Requests\StoreEnfantRequest;
use App\Http\Requests\UpdateEnfantRequest;
use App\Models\Owner;
use Carbon\Carbon;

class EnfantController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $enfants = Enfant::paginate(10); // Modifiez le nombre pour la pagination selon vos besoins
        return view('admin.children.index', compact('enfants'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $parents = Owner::all();
        return view('admin.children.create', compact('parents'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreEnfantRequest $request)
    {
        $validatedData = $request->validated();

        Enfant::create([
            'lastname' => $validatedData['lastname'],
            'firstname' => $validatedData['firstname'],
            'birthdate' => $validatedData['birthdate'],
            'owner_id' => $validatedData['owner_id'],
        ]);

        return redirect()->route('admin.children.index')->with('success', 'Enfant ajouté avec succès.');
    }


    /**
     * Display the specified resource.
     */
    public function show(Enfant $enfant)
    {
        return view('admin.children.show', compact('enfant'));
    }

    /**
     * Show the form for editing the specified resource.
     */


    public function edit(Enfant $enfant)
    {
        $enfant->birthdate = Carbon::parse($enfant->birthdate);
        return view('admin.children.edit', compact('enfant'));
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateEnfantRequest $request, Enfant $enfant)
    {
        $enfant->update($request->validated());
        return redirect()->route('admin.children.index')->with('success', 'Enfant mis à jour avec succès.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Enfant $enfant)
    {
        $enfant->delete();
        return redirect()->route('admin.children.index')->with('success', 'Enfant supprimé avec succès.');
    }
}
