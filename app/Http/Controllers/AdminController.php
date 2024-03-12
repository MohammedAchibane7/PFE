<?php

namespace App\Http\Controllers;
use App\Models\Candidat;
use App\Models\Recruteur;
use Illuminate\Http\Request;
use App\Http\Requests\candidatrequest;
use App\Http\Requests\recruteurrequest;
use Illuminate\support\Facades\Hash;
class AdminController extends Controller
{
    public function index (){
       return view('admin.dashboard');
    }
    public function list (){
        $candidats  = Candidat::all(); // bach i3iyt l ga3 lines li f DB (select * from Profile)
       return view('admin.Candidatlist',compact('candidats')); // ga3 l attributes 
   }
   public function update(candidatrequest $request,candidat $candidat){
    $formFields = $request->validated();
    //hash
    $formFields['password'] = Hash::make($request->password);

    if (!$request->filled('password')) {
        unset($formFields['password']);
    }
    $formFields['image'] =$this->uploadImage($request);
    $candidat->fill($formFields)->save();
    return to_route('candi.show',$candidat->id)->with('success','this profile has been modified canididat ');
} 
   public function edit(candidat $candidat){
    return view('admin.Candidatedit',compact('candidat'));
}
   public function destroy (candidat $candidat){
    $candidat->delete();
    return to_route('admins.index')->with('success','this profile is deleted');
}
public function show($id)
{
    $candidat = Candidat::findOrFail($id); // Assuming Candidat is your model
    return view('admin.showCandidat', compact('candidat'));
}
private function uploadImage( candidatrequest $request){
    if($request->hasFile('image')){
        return $request->file('image')->store('candidat','public');
    }
   
}
   /*------------------------------------------- recruteur  -------------------------------------------*/

public function listrec (){
    $recruteurs  = Recruteur::all(); // bach i3iyt l ga3 lines li f DB (select * from Profile)
   return view('admin.Recruteurlist',compact('recruteurs')); // ga3 l attributes 
}
public function showrec($id)
{
    $recruteur = Recruteur::findOrFail($id); // Assuming Candidat is your model

    return view('admin.showRecruteur', compact('recruteur'));
}
   public function editrec(recruteur $recruteur){
    return view('admin.Recruteuredit',compact('recruteur'));
}


public function updaterec(recruteurrequest $request,recruteur $recruteur){
    $formFields = $request->validated();
    //hash
    $formFields['password'] = Hash::make($request->password);

    if (!$request->filled('password')) {
        unset($formFields['password']);
    }
    $formFields['logo'] =$this->uploadImage2($request);
    $recruteur->fill($formFields)->save();
    return to_route('rec.show',$recruteur->id)->with('success','this profile has been modified recruteur ');
} 
   public function destroyrec (recruteur $recruteur){
    $recruteur->delete();
    return to_route('admins.index')->with('success','this profile is deleted');
}

private function uploadImage2( recruteurrequest $request){
    if($request->hasFile('logo')){
        return $request->file('logo')->store('recruteur','public');
    }
}
}