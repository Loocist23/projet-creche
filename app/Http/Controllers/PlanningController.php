<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePlanningRequest;
use App\Http\Requests\UpdatePlanningRequest;
use App\Models\Planning;

class PlanningController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $plannings = Planning::paginate(10); // Ajustez la pagination si nécessaire
        return view('admin.plannings.index', compact('plannings'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.plannings.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePlanningRequest $request)
    {
        Planning::create($request->validated());
        return redirect()->route('admin.plannings.index')->with('success', 'Planning créé avec succès.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Planning $planning)
    {
        return view('admin.plannings.show', compact('planning'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Planning $planning)
    {
        return view('admin.plannings.edit', compact('planning'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePlanningRequest $request, Planning $planning)
    {
        $planning->update($request->validated());
        return redirect()->route('admin.plannings.index')->with('success', 'Planning mis à jour avec succès.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Planning $planning)
    {
        $planning->delete();
        return redirect()->route('admin.plannings.index')->with('success', 'Planning supprimé avec succès.');
    }
}
