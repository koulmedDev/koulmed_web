<?php

namespace App\Http\Controllers;

use App\Models\Pharmacie;
use Illuminate\Http\Request;

class PharmacieController extends Controller
{
     // Afficher toutes les pharmacies
     public function index()
     {
         $pharmacies = Pharmacie::all();
         return view('admin.allPharmacies', compact('pharmacies'));
     }

     // Afficher le formulaire de création
     public function create()
     {
         return view('admin.ajouterPharmacie');
     }

     // Enregistrer une nouvelle pharmacie
     public function store(Request $request)
     {
         $request->validate([
             'name' => 'required|string|max:255',
             'phone' => 'required|numeric',
             'address' => 'required|string',
         ]);

         Pharmacie::create($request->all());
         return redirect()->route('pharmacie.index')->with('success', 'Pharmacie ajoutée avec succès');
     }

     // Afficher une pharmacie spécifique
     public function show(Pharmacie $pharmacie)
     {
         return view('admin.showPharmacie', compact('pharmacie'));
     }

     // Afficher le formulaire d'édition
     public function edit(Pharmacie $pharmacie)
     {
         return view('admin.editPharmacie', compact('pharmacie'));
     }

     // Mettre à jour une pharmacie
     public function update(Request $request, Pharmacie $pharmacie)
     {
         $request->validate([
             'name' => 'required|string|max:255',
             'phone' => 'required|numeric',
             'address' => 'required|string',
         ]);

         $pharmacie->update($request->all());
         return redirect()->route('pharmacie.index')->with('success', 'Pharmacie mise à jour avec succès');
     }

     // Supprimer une pharmacie
     public function destroy($id)
     {
         $pharmacie = Pharmacie::findOrFail($id);
         $pharmacie->delete();
         return redirect()->route('pharmacie.index')->with('success', 'Pharmacie supprimée avec succès');
     }


     public function onDutyPharmacies()
{
    $pharmacies = Pharmacie::all();
    return view('pharmacie', compact('pharmacies'));
}
}
