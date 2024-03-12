<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Recruteur;
use App\Models\Annonce;
use App\Models\DemandeEmploi;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class RecruteurController extends Controller
{
    //
    public function index (){
        return view('recruteur.index');  
    }
    public function show($id)
    {
        $recruteur = Recruteur::findOrFail($id); // Assuming Candidat is your model

        return view('recruteur.show', compact('recruteur'));
    }
    public function edit(Recruteur $recruteur){
        return view('recruteur.edit',compact('recruteur'));
    }

    public function update(Request $request,Recruteur $recruteur){
        $validatedData = $this->validate($request,array(
            'nom'=>'required|min:3|max:20',
           	'prenom'=>'required|min:3|max:20',
          	'CIN'=>'required|max:8',
           	'entreprise'=>'required|max:50',
            'logo' => 'image|mimes:png,jpg,jpeg,svg|max:10240',
            'ville' => 'required|max:30',            
            'Description' => 'required|max:120',
            'email' => "required|email|unique:recruteurs,email,$recruteur->id",
           	'password'=>'required|min:9|max:30|confirmed',
        ));
        //hash
        $validatedData['password'] = Hash::make($request->password);
        if (!$request->filled('password')) {
            unset($validatedData['password']);
        }
        $validatedData['logo'] =$this->uploadImage($request);
        $recruteur->fill($validatedData)->save();
        return to_route('recruteurs.show',$recruteur->id)->with('success','Your profile is modified');
    }
    private function uploadImage( Request $request){
        if($request->hasFile('logo')){
            return $request->file('logo')->store('recruteur','public');
        }
    } 

    // public function showAnnonceCandidats($annonceId)
    // {
    //     // Récupérer l'annonce spécifique pour le recruteur
    //     $annonce = Recruteur::findOrFail(Auth::guard('recruteur')->id()) // Supposons que l'utilisateur est authentifié et est le recruteur
    //                     ->annonces()
    //                     ->findOrFail($annonceId);

        
    //     // Récupérer les demandes d'emploi pour cette annonce avec les informations des candidats
    //     $candidats = DemandeEmploi::where('annonce_id', $annonceId)->with('candidat')->get();


    //     // Passer les données à la vue
    //     return view('recruteur.showcandidats', compact('annonce', 'candidats'));
    // }

        public function showAnnonceCandidats($recruteurId)
    {
        // Récupérer toutes les annonces créées par le recruteur
        $annonces = Annonce::where('recruteur_id', $recruteurId)->get();
        
        // Pour chaque annonce, récupérer toutes les demandes d'emploi associées
        foreach ($annonces as $annonce) {
            $demandesEmploi[$annonce->id] = DemandeEmploi::where('annonce_id', $annonce->id)->get();
        }

        // Passer les données à la vue
        return view('recruteur.showcandidats', compact('annonces', 'demandesEmploi'));
    }
}
