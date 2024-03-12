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
<form  method="POST" action="{{ route('candidats.update',$candidat->id) }}" enctype="multipart/form-data">
        
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h3 class="card-title text-center mb-4">Modifier Profile</h3>
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                                <label  class="form-label">Nom</label>
                                <input type="text" name="nom" class="form-control" value="{{old('nom',$candidat->nom)}}"/>
                                @error('nom')
                                  <div class="text-danger">
                                        {{$message}}
                                </div>
                                @enderror
                                <small id="nameHelp" class="form-text text-muted">Please write your last name here</small>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Prenom</label>
                                <input type="text" name="prenom" class="form-control" value="{{old('prenom',$candidat->prenom)}}"/>
                                @error('prenom')
                                  <div class="text-danger">
                                        {{$message}}
                                </div>
                                @enderror
                                <small id="nameHelp" class="form-text text-muted">Please write your first name here</small>
                            </div>

                          
                            <div class="mb-3">
                                <label class="form-label">Image</label>
                                <input type="file" class="form-control" name="image" />
                                @error('image')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                                <div>
                                    <img class="m-2" src="{{ asset('storage/'.$candidat->image) }}" width="200" alt=""/>
                                </div>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">age</label>
                                <input type="text" name="age" class="form-control" value="{{old('age',$candidat->age)}}"/>
                                @error('age')
                                  <div class="text-danger">
                                        {{$message}}
                                </div>
                                @enderror
                                <small id="nameHelp" class="form-text text-muted">Please enter ur age</small>
                            </div>

                            <div class="mb-3">
                                <label  class="form-label">adresse</label>
                                <textarea class="form-control" name="adresse" value="{{old('adresse',$candidat->adresse)}}"></textarea>
                            </div>

                            <div class="mb-3">
                                <label  class="form-label"> CIN </label>
                                <input type="text" class="form-control" value="{{old('CIN',$candidat->CIN)}}" name="CIN" />
                            </div>

                            <div class="mb-3">
                                <label for="email" class="form-label">E-mail</label>
                                <input type="text" name="email" class="form-control" value="{{old('email',$candidat->email)}}" id="email" />
                                @error('email')
                                  <div class="text-danger">
                                        {{$message}}
                                </div>
                                @enderror
                                <small id="emailHelp" class="form-text text-muted">Please write your email here</small>
                            </div>

                            <div class="mb-3">
                                <label  class="form-label">Password</label>
                                <input type="password" name="password" class="form-control" />
                                <small id="passwordHelp" class="form-text text-muted">Please enter your password</small>
                            </div>

                            
                            <div class="mb-3">
                                <label  class="form-label">Password validation</label>
                                <input type="password" name="password_confirmation" class="form-control"  />
                                <small id="passwordHelp" class="form-text text-muted">Please enter your password</small>
                            </div>

                            <div class="mb-3">
                                <label  class="form-label"> Departement </label>
                                <input type="text" class="form-control" name="Departement" value="{{old('Departement',$candidat->Departement)}}"/>
                            </div>

                            <div class="mb-3">
                                <label  class="form-label"> Niveau d'etude </label>
                                <input type="text" class="form-control" name="Niveau_etude" value="{{old('Niveau_etude',$candidat->Niveau_etude)}}" />
                            </div>

                          

                            <div class="mb-3">
                                <label  class="form-label">Description</label>
                                <textarea class="form-control" name="Description" value="{{old('Description',$candidat->Description)}}"></textarea>
                            </div>
                      
                            <div class="d-grid">
                                <button type="submit" class="btn btn-primary">modifier</button>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
</x-master>
</body>
</html>