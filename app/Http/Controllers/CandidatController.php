<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Candidat;
use App\Http\Requests\candidatrequest;
use Illuminate\support\Facades\Hash;
class CandidatController extends Controller
{
  
    public function edit(candidat $candidat){
        return view('candidat.edit',compact('candidat'));
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
        return to_route('candidats.show',$candidat->id)->with('success','Your profile is modified');
    }
    public function show($id)
    {
        $candidat = Candidat::findOrFail($id); // Assuming Candidat is your model

        return view('candidat.show', compact('candidat'));
    }
    public function destroy (candidat $candidat){
        $candidat->delete();
        return to_route('candidats.index')->with('success','your profile is deleted');
    }
    private function uploadImage( candidatrequest $request){
        if($request->hasFile('image')){
            return $request->file('image')->store('candidat','public');
        }
}
}