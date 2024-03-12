<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\PublicationRequest;
use App\Models\Publication;
use Illuminate\Support\Facades\Gate;
use Illuminate\Http\Request;

class PublicationController extends Controller
{
    public function __construct(){
      $this->middleware('auth')->except('index');
    } 
    
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
      $publications = Publication::latest()->get();
      return view('publication.index',compact('publications'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('publication.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PublicationRequest $request)
    {

        $formFields = $request->validated();
          // insertion image
       $formFields['image'] =$request->file('image'); //->storeAs('profile','travis','public');
       $formFields['image'] =$this->uploadImage($request);
        // insertion
        $formFields['candidat_id']=Auth::id();
        Publication::create($formFields);
       
        return to_route('publications.index')->with('success','Your publication is created');
    }

    /**
     * Display the specified resource.
     */
    public function show(Publication $publication)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Publication $publication)
    { 
        //permissions 
        // if(Auth::id() !== $publication -> profile_id){
        //      abort(403);
        // }
         //permissions
       // Gate::authorize('update-publication',$publication);
       // policies 
       $this->authorize('update',$publication);
        return view('publication.edit',compact('publication'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PublicationRequest $request, Publication $publication)
{
     
//      if(Auth::id() !== $publication -> profile_id){
//         abort(403);
//    }
 //permissions
   Gate::authorize('update-publication',$publication);
    // Validate the form fields
    $formFields = $request->validated();
    
    // Check if a new image has been uploaded
    if ($request->hasFile('image')) {
        // Upload the new image
        $imagePath = $this->uploadImage($request, $formFields);
        
        // Set the new image path in the form fields
        $formFields['image'] = $imagePath;
        
        // Delete the old image if it exists
        if (Storage::exists($publication->image)) {
            Storage::delete($publication->image);
        }
    }

    // Update the publication with the new form fields
    $publication->update($formFields);

    return redirect()->route('publications.index')->with('success', 'Your publication has been modified.');
}


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Publication $publication)
    {
        try {
            // Delete the publication
            $publication->delete();
            
            return redirect()->route('publications.index')->with('success', 'Your publication has been deleted.');
        } catch (\Exception $e) {
            // Handle any errors that occur during deletion
            return redirect()->back()->with('error', 'An error occurred while deleting the publication: ' . $e->getMessage());
        }
    }
    
    private function uploadImage(PublicationRequest $request){
        if($request->hasFile('image')){
            return $request->file('image')->store('publication','public');
        }
    } 
}

