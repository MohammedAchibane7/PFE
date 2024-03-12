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

<form method="post" action="{{ route('recruteur.registration.store') }}" enctype="multipart/form-data">
        
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h3 class="card-title text-center mb-4">Ajouter RH</h3>
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
                                <label class="form-label">CIN</label>
                                <input type="text" name="CIN" class="form-control"/>
                                @error('CIN')
                                  <div class="text-danger">
                                        {{$message}}
                                </div>
                                @enderror
                                <small id="nameHelp" class="form-text text-muted">Entrez votre CIN</small>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Entreprise</label>
                                <input type="text" name="entreprise" class="form-control"/>
                                @error('entreprise')
                                  <div class="text-danger">
                                        {{$message}}
                                </div>
                                @enderror
                                <small id="nameHelp" class="form-text text-muted">Entrez votre Entreprise</small>
                            </div>

                            <div class="mb-3">
                                <label  class="form-label">logo</label>
                                <input type="file" class="form-control" name="logo"></input>
                            </div>


                            <div class="mb-3">
                                <label class="form-label">ville</label>
                                <input type="text" name="ville" class="form-control"/>
                                @error('ville')
                                  <div class="text-danger">
                                        {{$message}}
                                </div>
                                @enderror
                                <small id="nameHelp" class="form-text text-muted">Please enter ur age</small>
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
                                <label  class="form-label">Password</label>
                                <input type="password" name="password" class="form-control" />
                                <small id="passwordHelp" class="form-text text-muted">Please enter your password</small>
                            </div>

                            
                            <div class="mb-3">
                                <label  class="form-label">Password validation</label>
                                <input type="password" name="password_confirmation" class="form-control" />
                                <small id="passwordHelp" class="form-text text-muted">Please enter your password</small>
                            </div>

                            <div class="mb-3">
                                <label  class="form-label">Description</label>
                                <textarea class="form-control" name="Description"></textarea>
                            </div>
                      
                            <div class="d-grid">
                                <button type="submit" class="btn btn-primary">Submit</button>
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