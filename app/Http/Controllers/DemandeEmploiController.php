<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\DemandeEmploi;

use App\Models\Annonce;
use Illuminate\Support\Facades\Auth;

class DemandeEmploiController extends Controller
{
    //
    public function form($annonce_id)
    {
        // Récupérer les détails de l'annonce en fonction de l'identifiant $jobId
        $annonce = \App\Models\Annonce::findOrFail($annonce_id);
        return view('demande.form', compact('annonce'));
    }
    
public function postuler(Request $request, $annonceId)
{
    
    // Valider les données du formulaire
    $validatedData = $request->validate([
        'nom' => 'required',
        'prenom' => 'required',
        'email' => 'required',
        'cv' => 'required|file|mimes:pdf|max:10048',
        'lettre_motivation' => 'required|file|mimes:pdf|max:10048',
    ]);
    
    $uploadedFiles = $this->uploadFiles($request);

    // Enregistrer la demande d'emploi dans la base de données avec les chemins de stockage des fichiers
    DemandeEmploi::create([
        'nom' => $request->nom,
        'prenom' => $request->prenom,
        'email' => $request->email,
        'cv' => $uploadedFiles['cv'], // Utiliser le chemin du fichier CV téléchargé
        'lettre_motivation' => $uploadedFiles['lettre_motivation'], // Utiliser le chemin du fichier lettre de motivation téléchargé
        'annnonce_id' => $annonceId,
        'candidat_id' => Auth::guard('candidat')->id(), // Supposons que l'utilisateur est authentifié et est le candidat
        'status' => 'en attente',
        // Ajoutez d'autres champs si nécessaire
    ]);

    // Rediriger avec un message de succès
    return redirect()->route('annonces.index')->with('success', 'Votre demande d\'emploi a été soumise avec succès.');
}
private function uploadFiles(Request $request)
{
    $uploadedFiles = [];

    // Vérifier si un fichier CV a été envoyé
    if ($request->hasFile('cv')) {
        $cvPath = $request->file('cv')->store('demandes', 'public');
        $uploadedFiles['cv'] = $cvPath;
    }

    // Vérifier si un fichier de lettre de motivation a été envoyé
    if ($request->hasFile('lettre_motivation')) {
        $lettreMotivationPath = $request->file('lettre_motivation')->store('demandes', 'public');
        $uploadedFiles['lettre_motivation'] = $lettreMotivationPath;
    }

    return $uploadedFiles;
}
}
