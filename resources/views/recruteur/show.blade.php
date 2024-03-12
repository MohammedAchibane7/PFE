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
    <style>
        /* Add custom CSS styles for the SVG icon */
        .icon {
            width: 24px;
            height: 24px;
            fill: #007bff; /* Blue color */
        }
    </style>
    <!-- Fav Icon -->
	<link rel="shortcut icon" type="image/x-icon" href="#" />
</head>
<body>
    <x-master>
        <!-- Fav Icon -->
        {{-- <section class="section-5 bg-2">
            <div class="container py-5">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="card border-0 shadow mb-4 p-3">
                            <div class="s-body text-center mt-3">
                                <img src="{{ asset('storage/'.$recruteur->logo) }}" alt="avatar" class="img-fluid" style="width: 120px; height: 120px;">

                                <h5 class="mt-3 pb-0">{{$recruteur->prenom.' '.$recruteur->nom}}</h5>
                                <p class="text-muted mb-1 fs-6">Entreprise : {{$recruteur->entreprise}}</p>
                                
                                <div class="profile-details">
                                    <p>Email : <a href="mailto:{{$recruteur->email}}">{{$recruteur->email}}</a></p>
                                    <p>Ville : {{$recruteur->ville }}</p>
                                </div>
                                    <div class="d-flex justify-content-center mb-2">
                                        <a class="btn btn-primary" href="{{ route('recruteurs.edit',$recruteur->id) }}">Modifier Profile</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!----------------------------------------------------Annonces ------------------------------------------>

                    <div class="col-lg-9">
                        <div class="card border-0 shadow mb-4 p-3">
                            <div class="card-body card-form text-center">
                                <div class="d-flex justify-content-between ">
                                    <div>
                                        <h3 class="fs-4 mb-1">Mes Annonce</h3>
                                    </div>
                                    <div> 
                                        <a class="btn btn-primary" href="route('Annonces.create') ">Ajouter Annonce</a>
                                    </div>
                                </div>

                                    
                                <div class="table-responsive">
                                    <table class="table ">
                                        <thead class="bg-light">
                                            <tr>
                                                <th scope="col">Title</th>
                                                <th scope="col">Date de publication</th>
                                                <th scope="col">Type</th>
                                                <th scope="col">Nombre des candidats</th>
                                                <th scope="col">Action</th>
                                            </tr>
                                        </thead>
{{--                                         
                                        @foreach ($recruteur->annonce as $annonce)
                                        <tbody class="border-0">
                                            <tr class="active">
                                                <td>
                                                    <div class="job-name fw-500">{{$annonce->titre}}</div>
                                                    <div class="info1">{{ $annonce->ville}}</div>
                                                </td>
                                                <td>{{ $annonce->created_at}}</td>
                                                <td>{{ $annonce->type}}</td>
                                                <td>
                                                    <div class="job-status text-capitalize">Ba9i at9ad</div>
                                                </td>
                                                <td>
                                                    <div class="action-dots float-end">
                                                        <div class="d-flex justify-content-center ">
                                                            <a class="btn btn-primary" href="{{ route('Annonces.edit',$annonce) }}">
                                                            <svg class="feather feather-edit" fill="none" height="15" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg"><path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"/><path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"/></svg>
                                                            </a>    
                                                        </div>     
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                        @endforeach 
                                    </table>  
                                </div>
                                
                            </div>
                        </div> 
                    </div>
                </div>
            </div> 

        </section>--}}
        <section class="section-5 bg-2">
            <div class="container py-5">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="card border-0 shadow mb-4 p-3">
                            <div class="s-body text-center mt-3">
                                <img src="{{ asset('storage/'.$recruteur->logo) }}" alt="avatar" class="img-fluid" style="width: 120px; height: 120px;">
                                <h5 class="mt-3 pb-0">{{$recruteur->prenom.' '.$recruteur->nom}}</h5>
                                <p class="text-muted mb-1 fs-6">Entreprise : {{$recruteur->entreprise}}</p>
                                <div class="profile-details">
                                    <p>Email : <a href="mailto:{{$recruteur->email}}">{{$recruteur->email}}</a></p>
                                    <p>Ville : {{$recruteur->ville }}</p>
                                </div>
                                <div class="d-flex justify-content-center mb-2">
                                    <a class="btn btn-primary" href="{{ route('recruteurs.edit',$recruteur->id) }}">Modifier Profile</a>
                                </div>
                            </div>
                        </div>
                    </div>
        
                    <!-- Annonces section -->
                    <div class="col-lg-9">
                        <div class="card border-0 shadow mb-4 p-3">
                            <div class="card-body card-form text-center">
                                <div class="d-flex justify-content-between">
                                    <div>
                                        <h3 class="fs-4 mb-1">Mes Annonces</h3>
                                    </div>
                                    <div>
                                        <a class="btn btn-primary" href="{{ route('annonces.create') }}">Ajouter Annonce</a>
                                    </div>                                    
                                </div>
        
                                <div class="table-responsive">
                                    <table class="table ">
                                        <thead class="bg-light">
                                            <tr>
                                                <th scope="col">Title</th>
                                                <th scope="col">Date de publication</th>
                                                <th scope="col">Type</th>
                                                <th scope="col">Nombre des candidats</th>
                                                <th scope="col">Action</th>
                                            </tr>
                                        </thead>                      
                                        @foreach ($recruteur->annonce as $annonce)
                                        <tbody class="border-0">
                                            <tr class="active">
                                                <td>
                                                    <div class="job-name fw-500">{{$annonce->titre}}</div>
                                                    <div class="info1">{{ $annonce->ville}}</div>
                                                </td>
                                                <td>{{ $annonce->created_at}}</td>
                                                <td>{{ $annonce->type}}</td>
                                                <td>
                                                    <div class="job-status text-capitalize">Ba9i at9ad</div>
                                                </td>
                                                <td>
                                                    <div class="action-dots float-end">
                                                        <div class="d-flex justify-content-center mx-3"> <!-- Center the buttons and add margin on the y-axis -->
                                                            <a class="btn btn-warning me-2" href="{{ route('annonces.edit',$annonce) }}"> <!-- Add margin to the right of the button -->
                                                                <svg class="feather feather-edit" fill="none"  height="15px" width="15px" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg"><path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"/><path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"/></svg>
                                                            </a> 
                                                            <form method="POST" action="{{ route('annonces.destroy', $annonce->id) }}">
                                                                @csrf
                                                                @method('DELETE')  
                                                                <button type="submit" class="btn btn-danger">
                                                                <svg height="15px" width="15px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 511.998 511.998" xml:space="preserve" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <polygon style="fill:#F4B2B0;" points="178.652,462.067 110.276,462.067 82.918,106.177 178.652,106.177 "></polygon> <path style="fill:#B3404A;" d="M311.198,70.475c-8.484,0-15.365-6.88-15.365-15.365V30.73H189.232V55.11 c0,8.484-6.88,15.365-15.365,15.365s-15.365-6.88-15.365-15.365V15.365C158.503,6.88,165.383,0,173.867,0h137.331 c8.484,0,15.365,6.88,15.365,15.365V55.11C326.563,63.596,319.684,70.475,311.198,70.475z"></path> <path style="fill:#F4B2B0;" d="M380.052,319.948l16.391-213.769H300.71v267.369C313.965,342.592,344.435,320.72,380.052,319.948z"></path> <g> <path style="fill:#B3404A;" d="M470.304,392.923c-8.484,0-15.365,6.88-15.365,15.365c0,40.242-32.741,72.983-72.983,72.983 c-40.243,0-72.984-32.741-72.984-72.983c0-34.479,24.522-63.845,57.028-71.208c0.011-0.002,0.02-0.005,0.031-0.006 c2.303-0.521,4.645-0.93,7.022-1.223c0.048-0.006,0.095-0.011,0.143-0.017c1.119-0.135,2.245-0.244,3.377-0.329 c0.081-0.006,0.164-0.014,0.246-0.018c1.183-0.083,2.374-0.14,3.571-0.166c8.077-0.171,14.554-6.544,15.005-14.475l15.282-199.302 h26.991c8.484,0,15.365-6.88,15.365-15.365s-6.88-15.365-15.365-15.365h-41.224h-95.735H178.652H82.918H41.695 c-8.484,0-15.365,6.88-15.365,15.365s6.88,15.365,15.365,15.365h26.994l26.268,341.704c0.615,8.005,7.291,14.186,15.32,14.186 h68.376h47.866c8.484,0,15.365-6.88,15.365-15.365c0-8.484-6.88-15.365-15.365-15.365h-32.501V121.542h91.327v248.965 c-4.648,11.891-7.103,24.653-7.103,37.779c0,57.188,46.526,103.712,103.714,103.712s103.712-46.525,103.712-103.712 C485.669,399.802,478.788,392.923,470.304,392.923z M316.075,121.542h63.782l-14.131,184.302c-0.069,0.011-0.137,0.026-0.206,0.035 c-0.931,0.147-1.856,0.32-2.781,0.492c-0.273,0.052-0.545,0.103-0.817,0.158c-16.835,3.283-32.529,10.675-45.846,21.666V121.542 H316.075z M163.287,446.703h-38.782L99.509,121.542h63.779v325.161H163.287z"></path> <path style="fill:#B3404A;" d="M403.685,408.297l7.968-7.968c6-6,6-15.729,0-21.73c-6.001-5.998-15.727-5.998-21.73,0l-7.968,7.968 l-7.968-7.968c-5.998-5.995-15.724-5.998-21.73,0c-6,6-6,15.729,0,21.73l7.968,7.968l-7.968,7.968c-6,6-6,15.729,0,21.73 c3.001,2.999,6.933,4.5,10.864,4.5c3.932,0,7.864-1.501,10.864-4.5l7.968-7.968l7.968,7.968c3.001,2.999,6.933,4.5,10.864,4.5 c3.932,0,7.864-1.501,10.864-4.5c6-6,6-15.729,0-21.73L403.685,408.297z"></path> </g> </g></svg></a>     
                                                                </button>
                                                            </form>                                                                             
                                                            </div>  
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                        @endforeach 
                                    </table>  
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

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




