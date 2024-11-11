<?php

namespace App\Http\Controllers;

use App\Models\Professions;
use Illuminate\Http\Request;

class ProfessionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $professions = Professions::all();
        return view('Backend.Admin.Profession.index', compact('professions'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        Professions::create($request->all());

        return redirect()->route('profession.index')->with('success', 'Profession created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $profession = Professions::with('details')->findOrFail($id);
        return view('Backend.Admin.Profession.detail', compact('profession'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
        ]);
        $profession = Professions::findOrFail($id);
        $profession->update($validatedData);

        return redirect()->route('profession.index')->with('success', 'Profession updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Professions $profession)
    {
        try {
            $profession->delete();
            return redirect()->route('profession.index')->with('success', 'Profession deleted successfully');
        } catch (\Exception $e) {
            return redirect()->route('profession.index')->with('error', 'Failed to delete profession: ' . $e->getMessage());
        }
    }
}
