<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Candidat;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use App\Http\Requests\candidatrequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Inertia\Inertia;
use Inertia\Response;
use App\Models\Recruteur;
use Illuminate\Http\Request;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(Request $request)
    {
        $view = $request->input('view'); // Assuming the parameter name is 'view'

        if ($view === 'candidat') {
            return view('candidat.register');
        } elseif ($view === 'recruteur') {
            return view('recruteur.create');
        }
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function storeCandidat(CandidatRequest $request)
{
    // Validate the form data
    $validatedData = $request->validated();

    // Create a new Candidat instance and assign values
    $candidat = new Candidat();
    $candidat->fill($validatedData);
    $candidat->password = Hash::make($validatedData['password']); // Hash the password

    // Handle image upload if present
    if ($request->hasFile('image')) {
        $candidat->image = $request->file('image')->store('candidat', 'public');
    }

    // Save the Candidat to the database
    $candidat->save();

    // Authenticate the Candidat
    Auth::login($candidat);

    // Fire the Registered event
    event(new Registered($candidat));

    // Redirect with a success message
    if (auth()->guard('admin')->check()) {
        return redirect()->route('admins.index')->with('success', 'new profile added ');
    } elseif (auth()->guard('candidat')->check()) {
        return redirect()->route('candidat.homeCandi')->with('success', 'Votre profil a été créé avec succès.');
    } else {
        // Handle the case if neither admin nor candidat guard is authenticated
    }
}
public function storeRecruteur(Request $request)
{
    // Validate the form data
    $validatedData = $request->validate([
        'nom' => 'required|min:3|max:20',
        'prenom' => 'required|min:3|max:20',
        'CIN' => 'required|max:8',
        'entreprise' => 'required|max:50',
        'logo' => 'image',
        'ville' => 'required|max:30',
        'Description' => 'required|max:120',
        'email' => 'required|email|unique:recruteurs,email',
        'password' => 'required|min:9|max:30|confirmed',
    ]);

    // Hash the password
    $validatedData['password'] = Hash::make($validatedData['password']);

    // Handle file upload
    if ($request->hasFile('logo')) {
        $validatedData['logo'] = $request->file('logo')->store('recruteur', 'public');
    }

    // Create the Recruteur record
    $recruteur = Recruteur::create($validatedData);

    // Authenticate the Recruteur
    Auth::login($recruteur);

    // Redirect to the show route with success message
    if (auth()->guard('admin')->check()) {
        return redirect()->route('admins.index')->with('success', 'new profile added in recrutuers  ');
    }elseif (auth()->guard('recruteur')->check()){
        return redirect()->route('recruteurs.show', ['id' => $recruteur->id])->with('success', 'Votre profil a été créé avec succès.');
}
}
    
    private function uploadImage( candidatrequest $request){
        if($request->hasFile('image')){
            return $request->file('image')->store('candidat','public');
        }
    }
}
