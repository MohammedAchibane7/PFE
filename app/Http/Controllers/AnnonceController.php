<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Annonce;
use App\Models\Recruteur;

use App\Models\DemandeEmploi;
use Illuminate\Support\Facades\Auth;

class AnnonceController extends Controller
{
    
    //
    public function index()
    {
        $Annonces=Annonce::latest()->paginate();
        return view('annonce.index',compact('Annonces'));
    }
   
   public function create()
   {
       return view('annonce.create');
   }
    public function store(Request $request)
    {
        // Vous pouvez maintenant utiliser $recruteur_id dans votre logique de contrôleur
        // Par exemple, pour l'associer à l'annonce nouvellement créée

        // Validation des données
        $validatedData = $request->validate([
            'titre' => 'required|string|max:150',
            'type' => 'required|string|in:Full Time,Part Time,Freelance',
            'departement' => 'required|string|max:40',
            'description' => 'required|string|max:200',
            'salaire' => 'string|max:255',
        ]);

        // Création de l'annonce avec l'ID du recruteur associé
        $annonce = new Annonce();
        $annonce->recruteur_id =Auth::guard('recruteur')->id();
        $annonce->titre = $validatedData['titre'];
        $annonce->type = $validatedData['type'];
        $annonce->departement = $validatedData['departement'];
        $annonce->description = $validatedData['description'];
        $annonce->salaire = $validatedData['salaire']; // Utilisation de l'ID du recruteur récupéré de la route

        // Enregistrement de l'annonce dans la base de données
        $annonce->save();

        // Redirection avec un message de succès
        return redirect()->route('annonces.index')->with('success', 'Annonce créée avec succès.');
    }

    public function edit(Annonce $annonce)
    {
        return view('annonce.edit', compact('annonce'));
    }
    public function update(Request $request, Annonce $annonce)
    {
        // Validate the request data
        $validatedData = $request->validate([
            'titre' => 'required|max:50',
            'type' => 'required|in:Full Time,Part Time,Freelance',
            'departement' => 'required|max:50',
            'description' => 'required|max:120',
            'salaire' => 'max:7',
        ]);

        // Update the annonce with the validated data
        $annonce->update($validatedData);

        // Redirect back to the annonces index page or show success message
        return redirect()->route('annonces.index')->with('success', 'Annonce updated successfully.');
    }
    public function destroy(Annonce $annonce)
    {
        $annonce->delete();

        // Redirect back to the annonces index page or show success message
        return redirect()->route('annonces.index')->with('success', 'Annonce deleted successfully.');
    }
    public function show($annonceId)
{
    $annonce = Annonce::findOrFail($annonceId);
    $demandesEmploi = DemandeEmploi::where('annnonce_id', $annonceId)->get();

    // Vérifier si l'utilisateur actuellement authentifié est le recruteur associé à cette annonce
    if (Auth::guard('recruteur')->id() !== $annonce->recruteur_id) {
        abort(403, 'Vous n\'avez pas le droit d\'accéder à cette page.');
    }

    return view('annonce.show', compact('annonce', 'demandesEmploi'));
}
    
}
