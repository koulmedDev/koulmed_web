<?php

namespace App\Http\Controllers;

use App\Models\Periode;
use Illuminate\Http\Request;

class PeriodeController extends Controller
{
    public function index()
    {
        $periodes = Periode::all();
        return view('admin.voirperiode', compact('periodes'));
    }

    public function create()
    {
        return view('admin.ajouterperiode');
    }

    public function store(Request $request)
    {
        $request->validate([
            'titre' => 'required|string|max:255',
        ]);

        Periode::create([
            'titre' => $request->titre,
        ]);

        return redirect()->route('periode.index')->with('success', 'Période ajoutée avec succès.');
    }

    public function edit($id)
    {
        $periode = Periode::findOrFail($id);
        return view('admin.editperiode', compact('periode'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'titre' => 'required|string|max:255',
        ]);

        $periode = Periode::findOrFail($id);
        $periode->update([
            'titre' => $request->titre,
        ]);

        return redirect()->route('periode.index')->with('success', 'Période mise à jour avec succès.');
    }

    public function destroy($id)
    {
        $periode = Periode::findOrFail($id);
        $periode->delete();

        return redirect()->route('periode.index')->with('success', 'Période supprimée avec succès.');
    }
}
