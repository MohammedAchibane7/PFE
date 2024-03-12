<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" />
    <link rel="stylesheet" type="text/css" href="/css/style.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
   
</head>
<body>
    
<x-master>

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-lg-9">
                <div class="card border-0 shadow mb-4 ">
                    <div class="card-body card-form p-4">
                        <h3 class="fs-4 mb-1">Ajouter Profile</h3>
                        <form method="POST" action="{{ route('candidat.registration.store') }}" enctype="multipart/form-data">
                         @csrf
                          <div class="row">
                            <div class="col-md-6 mb-4">
                                <label class="mb-2">Nom</label>
                                    <input type="text"  class="form-control" name="nom" >
                                    @error('nom')
                                    <div class="text-danger">
                                        {{$message}}
                                    </div>
                                    @enderror
                            </div>
                            <div class="col-md-6 mb-4">
                                <label class="mb-2">Prenom</label>
                                    <input type="text"  class="form-control" name="prenom" >
                                    @error('prenom')
                                    <div class="text-danger">
                                        {{$message}}
                                    </div>
                                    @enderror
                            </div>
                            <div class="col-md-6 mb-4">
                                <label class="mb-2">CIN</label>
                                    <input type="text"  class="form-control" name="CIN" >
                                    @error('CIN')
                                    <div class="text-danger">
                                        {{$message}}
                                    </div>
                                    @enderror
                            </div>
                            <div class="mb-4 col-md-6">
                                <label class="mb-2">Age</label>
                                <input type="text" class="form-control" name="age" >
                            </div>
                        </div>
                        <div class="mb-4">
                            <label for="" class="mb-2">email</label>
                            <input type="text" placeholder="email" id="email" name="email" class="form-control">
                            @error('email')
                              <div class="text-danger">
                                {{$message}}
                              </div>
                            @enderror    
                        </div>

                        <div class="row">
                        <div class="mb-4 col-md-6">
                                <label   class="mb-2">Password</label>
                                <input type="password" name="password" class="form-control" />
                                <small id="passwordHelp" class="form-text text-muted">Please enter your password</small>
                            </div>

                            
                            <div class="mb-4 col-md-6">
                                <label  class="mb-2">Password validation</label>
                                <input type="password" name="password_confirmation" class="form-control" />
                                <small id="passwordHelp" class="form-text text-muted">Please enter your password</small>
                            </div>
                        </div>


                        <div class="mb-4">
                            <label class="mb-2">adresse</label>
                            <textarea name="adresse" class="form-control"></textarea>
                            @error('adresse')
                              <div class="text-danger">
                                {{$message}}
                              </div>
                            @enderror                       
                         </div>
                        <div class="row my-4">
                            <div class="mb-4 col-md-6">
                                <label class="mb-2">Image</label>
                                <input type="file" class="form-control" name="image" >
                                @error('image')
                                  <div class="text-danger">
                                    {{$message}}
                                  </div>
                                @enderror                           
                             </div>
                        </div>
                        <div class="row">
                            <div class="mb-4 col-md-6">
                                <label for="" class="mb-2">Niveau d'etude </label>
                                <input type="text"  id="company_name" name="Niveau_etude" class="form-control">
                            </div>

                            <div class="mb-4 col-md-6">
                                <label for="" class="mb-2">Departement</label>
                                <input type="text"  id="location" name="Departement" class="form-control">
                                @error('Departement')
                                <div class="text-danger">
                                {{$message}}
                              </div>
                                @enderror    
                            </div>
                        </div>

                        <div class="mb-4">
                            <label class="mb-2">Description</label>
                            <textarea name="Description" class="form-control"></textarea>
                            @error('description')
                              <div class="text-danger">
                                {{$message}}
                              </div>
                            @enderror                       
                         </div>
                   
                    </div> 
                    <div class="card-footer  p-4">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div> 
                </form>              
            </div>  
         
        </div>
    </div>


   
</x-master>
</body>
</html>