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
    @if($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

<form method="POST" action="{{ route('demande.postuler', ['annonce_id' => $annonce->id]) }}" enctype="multipart/form-data">
        @csrf
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h3 class="card-title text-center mb-4">Postuler</h3>
                        @csrf
                            <div class="mb-3">
                                <label  class="form-label">Nom</label>
                                <input type="text" name="nom" class="form-control"/>
                                @error('nom')
                                  <div class="text-danger">
                                        {{$message}}
                                </div>
                                @enderror
                                <small id="nameHelp" class="form-text text-muted">Please write your last name here</small>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Prenom</label>
                                <input type="text" name="prenom" class="form-control"/>
                                @error('prenom')
                                  <div class="text-danger">
                                        {{$message}}
                                </div>
                                @enderror
                                <small id="nameHelp" class="form-text text-muted">Please write your first name here</small>
                            </div>

                            
                            <div class="mb-3">
                                <label for="email" class="form-label">E-mail</label>
                                <input type="text" name="email" class="form-control" id="email" />
                                @error('email')
                                  <div class="text-danger">
                                        {{$message}}
                                </div>
                                @enderror
                                <small id="emailHelp" class="form-text text-muted">Please write your email here</small>
                            </div>
                            
                            <div class="mb-3">
                                <label class="form-label">CV :</label>
                                <input type="file" name="cv" class="form-control"/>
                                @error('cv')
                                  <div class="text-danger">
                                        {{$message}}
                                </div>
                                @enderror
                                <small id="nameHelp" class="form-text text-muted"> CV : (PDF uniquement)</small>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Lettre de motivation:</label>
                                <input type="file" name="lettre_motivation" class="form-control"/>
                                @error('lettre_motivation')
                                  <div class="text-danger">
                                        {{$message}}
                                </div>
                                @enderror
                                <small id="nameHelp" class="form-text text-muted"> Lettre de motivation: (PDF uniquement)</small>
                            </div>
                      
                            <div class="d-grid">
                                <button type="submit" class="btn btn-primary">Postuler</button>
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