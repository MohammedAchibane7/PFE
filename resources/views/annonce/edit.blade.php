<!DOCTYPE html>
<html class="no-js" lang="en_AU" />
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title>CareerVibe | Find Best Jobs</title>
	<meta name="description" content="" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, maximum-scale=1, user-scalable=no" />
	<meta name="HandheldFriendly" content="True" />
	<meta name="pinterest" content="nopin" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" />
    <link rel="stylesheet" type="text/css" href="/css/style.css" />
	<!-- Fav Icon -->
	<link rel="shortcut icon" type="image/x-icon" href="#" />
</head>
<body data-instant-intensity="mousedown">
<x-master>
<section class="section-5 bg-2">
    <div class="container py-5">
    
        <div class="row">
            <div class="col-lg-3">
                <div class="card border-0 shadow mb-4 p-3">
                    {{-- <div class="s-body text-center mt-3">
                        <img src="{{ asset('storage/'.$recruteur->logo) }}"  alt="avatar"  class="rounded-circle img-fluid" style="width: 150px;">
                        <h5 class="mt-3 pb-0"> {{$recruteur->prenom}} {{$recruteur->nom}}</h5>
                        <p class="text-muted mb-1 fs-6">Email : <a href="mailto:{{$recruteur->email}}">{{$recruteur->email}}</a></p>
                        <div class="d-flex justify-content-center mb-2">
                        <form method="GET" action="{{ route('candidats.edit',$candidat->id)}}">
                          @csrf
                       <button data-bs-toggle="modal" data-bs-target="#exampleModal" type="button" class="btn btn-primary">Modifier</button>
                       </form>
                        </div>
                    </div> --}}
                </div>
                <div class="card account-nav border-0 shadow mb-4 mb-lg-0">
                    <div class="card-body p-0">
                        <ul class="list-group list-group-flush ">
                            <li class="list-group-item d-flex justify-content-between p-3">
                                <a href="account.html">Account Settings</a>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                                <a href="post-job.html">Post a Job</a>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                                <a href="my-jobs.html">My Jobs</a>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                                <a href="job-applied.html">Jobs Applied</a>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                                <a href="saved-jobs.html">Saved Jobs</a>
                            </li>                                                        
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-9">
                <div class="card border-0 shadow mb-4 ">
                    <form method="POST" action="{{ route('annonces.update', $annonce->id) }}">
                        @csrf
                        @method('PUT')
                    <div class="card-body card-form p-4">
                        <h3 class="fs-4 mb-1">Modifier publication</h3>
                          <div class="row">
                            <div class="col-md-6 mb-4">
                                  
                                <label class="mb-2">Titre</label>
                                    <input type="text"  class="form-control" name="titre" value="{{old('titre',$annonce->titre)}}">
                                    @error('titre')
                                    <div class="text-danger">
                                        {{$message}}
                                    </div>
                                    @enderror
                            </div>
                            <div class="col-md-6 mb-4">
                                <label class="mb-2">Type</label>
                                <select class="form-select" name="type" value="{{old('titre',$annonce->type)}}" >
                                    <option value="Full Time">Full Time</option>
                                    <option value="Part Time">Part Time</option>
                                    <option value="Freelance">Freelance</option>
                                </select>
                                @error('type')
                                <div class="text-danger">
                                  {{$message}}
                                </div>
                              @enderror
                            </div>
                          </div>

                          <div class="row my-4">
                              <div class="mb-4 col-md-6">
                                  <label class="mb-2">Salaire</label>
                                  <input type="text" class="form-control" name="salaire" value="{{old('salaire',$annonce->salaire)}}">
                              </div>

                              <div class="mb-4 col-md-6">
                                <label class="mb-2">Departement</label>
                                <input type="text" class="form-control" name="departement" value="{{old('departement',$annonce->departement)}}">
                            </div>
                          </div>

                          <div class="mb-4">
                              <label class="mb-2">Description</label>
                              <textarea name="description" class="form-control">{{old('description',$annonce->description)}}</textarea>
                              @error('description')
                                <div class="text-danger">
                                  {{$message}}
                                </div>
                              @enderror                       
                          </div>
                    </div> 
                    <div class="card-footer  p-4">
                        <button type="submit" class="btn btn-primary">Modifier</button>
                    </div> 
                  </form>              
            </div>
            
        </div>
    </div>
</section>

    
            
        


<footer class="bg-dark py-3 bg-2">
<div class="container">
    <p class="text-center text-white pt-3 fw-bold fs-6">© 2023 xyz company, all right reserved</p>
</div>
</footer> 
<script src="assets/js/jquery-3.6.0.min.js"></script>
<script src="assets/js/bootstrap.bundle.5.1.3.min.js"></script>
<script src="assets/js/instantpages.5.1.0.min.js"></script>
<script src="assets/js/lazyload.17.6.0.min.js"></script>
<script src="assets/js/slick.min.js"></script>
<script src="assets/js/lightbox.min.js"></script>
<script src="assets/js/custom.js"></script>
</x-master>
</body>
</html>