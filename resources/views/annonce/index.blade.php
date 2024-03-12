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
<section class="section-3 py-5 bg-2 ">
    <div class="container">     
        <div class="row">
            <div class="col-6 col-md-10 ">
                <h2>Find Jobs</h2>  
            </div>
        </div>

        <div class="row pt-5">
            <div class="col-md-4 col-lg-3 sidebar mb-4">
                <div class="card border-0 shadow p-4">
                    <div class="mb-4">
                        <h2>Keywords</h2>
                        <input type="text" placeholder="Keywords" class="form-control">
                    </div>

                    <div class="mb-4">
                        <h2>Location</h2>
                        <input type="text" placeholder="Location" class="form-control">
                    </div>

                    <div class="mb-4">
                        <h2>Category</h2>
                        <select name="category" id="category" class="form-control">
                            <option value="">Select a Category</option>
                            <option value="">Engineering</option>
                            <option value="">Accountant</option>
                            <option value="">Information Technology</option>
                            <option value="">Fashion designing</option>
                        </select>
                    </div>                   

                    <div class="mb-4">
                        <h2>Job Type</h2>
                        <div class="form-check mb-2"> 
                            <input class="form-check-input " name="job_type" type="checkbox" value="1" id="">    
                            <label class="form-check-label " for="">Full Time</label>
                        </div>

                        <div class="form-check mb-2"> 
                            <input class="form-check-input school-section" name="job_type" type="checkbox" value="1" id="">    
                            <label class="form-check-label " for="">Part Time</label>
                        </div>

                        <div class="form-check mb-2"> 
                            <input class="form-check-input school-section" name="job_type" type="checkbox" value="1" id="">    
                            <label class="form-check-label " for="">Freelance</label>
                        </div>

                        <div class="form-check mb-2"> 
                            <input class="form-check-input school-section" name="job_type" type="checkbox" value="1" id="">    
                            <label class="form-check-label " for="">Remote</label>
                        </div>
                    </div>

                    <div class="mb-4">
                        <h2>Experience</h2>
                        <select name="category" id="category" class="form-control">
                            <option value="">Select Experience</option>
                            <option value="">1 Year</option>
                            <option value="">2 Years</option>
                            <option value="">3 Years</option>
                            <option value="">4 Years</option>
                            <option value="">5 Years</option>
                            <option value="">6 Years</option>
                            <option value="">7 Years</option>
                            <option value="">8 Years</option>
                            <option value="">9 Years</option>
                            <option value="">10 Years</option>
                            <option value="">10+ Years</option>
                        </select>
                    </div>                    
                </div>
            </div>
            <div class="col-md-8 col-lg-9 ">
                <div class="job_listing_area">                    
                    <div class="job_lists">
                        <div class="row">
                            @foreach ($Annonces as $Annonce)
                                <div class="col-md-4">
                                    <div class="card border-0 p-3 shadow mb-4">
                                        <div class="card-body">
                                            <h3 class="border-0 fs-5 pb-2 mb-0">{{$Annonce ->titre}}</h3>
                                            <p>{{$Annonce ->description}}</p>
                                            <div class="bg-light p-3 border">
                                                <p class="mb-0">
                                                    <span class="fw-bolder"><i class="fa fa-map-marker"></i></span>
                                                    <span class="ps-1">  Ville : agadir</span>
                                                </p>
                                                <p class="mb-0">
                                                    <span class="fw-bolder"><i class="fa fa-clock-o"></i></span>
                                                    <span class="ps-1">Type : {{$Annonce ->type}}</span>
                                                </p>
                                                <p class="mb-0">
                                                    <span class="fw-bolder"><i class="fa fa-usd"></i></span>
                                                    <span class="ps-1">  Salaire : {{$Annonce ->salaire}}</span>
                                                </p>
                                            </div>
                                            @auth('recruteur')
                                            <a class="float-end btn btn-warning btn-sm my-2" href="{{route('annonces.edit',$Annonce->id)}}">Modifier</a>
                                            <a href="{{ route('annonce.show', ['annonceId' => $Annonce->id]) }}" class="btn btn-primary">Voir les candidats</a>
                                            @endauth
                                            @auth('candidat')
                                            <a href="{{ route('demande.form', ['annonce_id' => $Annonce->id]) }}" class="btn btn-primary">Postuler</a>

                                            @endauth
                                        </div>
                                    </div>      
                                </div> 
                             @endforeach
                        </div> 
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</section>
</x-master>
</body>
</html>