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
    @if ($errors -> any())
    <x-alert type="danger">
        <ul>
        <h6>Errors :</h6>
        @foreach ($errors->all() as $error)
        <li>{{$error}}</li>
        @endforeach
        </ul> 
    </x-alert>
    @endif
    
<form method="POST" action="{{ route('publications.store') }}" enctype="multipart/form-data">
        
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h3 class="card-title text-center mb-4">Ajouter Publication</h3> 
                        @csrf
                            <div class="mb-3">
                                <label  class="form-label">Titre</label>
                                <input type="text" name="titre" class="form-control"  />
                                @error('titre')
                                  <div class="text-danger">
                                        {{$message}}
                                </div>
                                @enderror
                                <small id="nameHelp" class="form-text text-muted">Please write your title here</small>
                            </div>

                            <div class="mb-3">
                                <label  class="form-label">Discreption</label>
                                <input type="text" name="body" class="form-control"  />
                                @error('body')
                                  <div class="text-danger">
                                        {{$message}}
                                </div>
                                @enderror
                                <small id="emailHelp" class="form-text text-muted">Please write your descreption here</small>
                            </div>

                        

                            <div class="mb-3">
                                <label  class="form-label">image</label>
                                <input type="file" class="form-control" name="image"></input>
                            </div>

                            <div class="d-grid">
                                <button type="submit" class="btn btn-primary">Submit</button>
                                @error('image')
                                  <div class="text-danger">
                                        {{$message}}
                                </div>
                                @enderror
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