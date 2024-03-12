<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<x-Adminmaster>
    <form  method="POST" action="{{ route('rec.update',$recruteur->id) }}" enctype="multipart/form-data">
       
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
                                <input type="text" name="nom" class="form-control" value="{{old('nom',$recruteur->nom)}}"/>
                                @error('nom')
                                  <div class="text-danger">
                                        {{$message}}
                                </div>
                                @enderror
                                <small id="nameHelp" class="form-text text-muted">Please write your last name here</small>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Prenom</label>
                                <input type="text" name="prenom" class="form-control" value="{{old('prenom',$recruteur->prenom)}}"/>
                                @error('prenom')
                                  <div class="text-danger">
                                        {{$message}}
                                </div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label">CIN</label>
                                <input type="text" name="CIN" class="form-control" value="{{old('CIN',$recruteur->CIN)}}"/>
                                @error('CIN')
                                  <div class="text-danger">
                                        {{$message}}
                                </div>
                                @enderror
                                <small id="nameHelp" class="form-text text-muted">Entrez votre CIN</small>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Entreprise</label>
                                <input type="text" name="entreprise" class="form-control" value="{{old('entreprise',$recruteur->entreprise)}}"/>
                                @error('entreprise')
                                  <div class="text-danger">
                                        {{$message}}
                                </div>
                                @enderror
                                <small id="nameHelp" class="form-text text-muted">Entrez votre Entreprise</small>
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">E-mail</label>
                                <input type="text" name="email" class="form-control" value="{{old('email',$recruteur->email)}}" id="email" />
                                @error('email')
                                  <div class="text-danger">
                                        {{$message}}
                                </div>
                                @enderror
                                <small id="emailHelp" class="form-text text-muted">Please write your email here</small>
                            </div>
                          
                            <div class="mb-3">
                                <label  class="form-label">logo</label>
                                <input type="file" class="form-control" name="logo" value="{{old('logo',$recruteur->logo)}}"></input>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">ville</label>
                                <input type="text" name="ville" class="form-control" value="{{old('ville',$recruteur->ville)}}"/>
                                @error('ville')
                                    <div class="text-danger">
                                        {{$message}}
                                    </div>
                                @enderror
                                <small id="nameHelp" class="form-text text-muted">Entrer la ville</small>
                            </div>

                            <div class="mb-3">
                                <label for="email" class="form-label">E-mail</label>
                                <input type="text" name="email" class="form-control" id="email"  value="{{old('email',$recruteur->email)}}"/>
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
                                <label  class="form-label">Description</label>
                                <textarea class="form-control" name="Description" value="{{old('Description',$recruteur->Description)}}"></textarea>
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
</x-Adminmaster>
</body>
</html>