<?php

namespace App\Http\Controllers;

use App\Models\ProfessionDetail;
use Illuminate\Http\Request;

class ProfessionDetailController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'profession_id' => 'required|exists:professions,id',
            'name' => 'required|string|max:255',
        ]);

        ProfessionDetail::create($request->all());

        return redirect()->back()->with('success', 'Profession detail added successfully.');
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $detail = ProfessionDetail::findOrFail($id);
        $detail->update($request->only('name'));

        return redirect()->back()->with('success', 'Profession detail updated successfully.');
    }

    public function destroy($id)
    {
        $detail = ProfessionDetail::findOrFail($id);
        $detail->delete();
        return redirect()->back()->with('success', 'Profession detail deleted successfully.');
    }
}
