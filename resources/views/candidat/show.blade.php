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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
        body {
            background-color: #253725;
        }

        .profile-card {
            width: 80%;
            max-width: 600px;
            margin: 50px auto;
            padding: 30px;
            background-color:#9BA8AB;
            border-radius: 50px; /* Large border radius */
            box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.1);
            text-align: center; /* Center align text */
        }

        .profile-image {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            object-fit: cover;
            margin: 0 auto 20px;
            display: block;
        }

        .profile-title {
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 20px;
        }

        .profile-details p {
            font-size: 18px;
            margin-bottom: 10px;
        }

        
        /* Night mode styles for publication cards */
        body {
            background-color: whitesmoke;
            color: #fff;
        }

        .publication-card {
            border: none;
            border-radius: 15px;
            background-color: #444;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
            transition: transform 0.3s ease-in-out;
        }

        .publication-card:hover {
            transform: translateY(-5px);
        }

        .publication-card .card-body {
            padding: 20px;
        }

        .publication-card .card-footer {
            padding: 10px;
            background-color: #444;
            border-radius: 0 0 15px 15px;
        }

        .publication-card .card-footer img {
            max-width: 100%;
            border-radius: 8px;
        }

        .publication-card .btn {
            margin-left: 10px;
            border-radius: 20px;
            font-weight: bold;
            text-transform: uppercase;
        }

        .btn-delete {
            background-color: #dc3545;
            color: #fff;
            border: 1px solid #dc3545;
        }

        .btn-delete:hover {
            background-color: #c82333;
            border-color: #c82333;
        }

        .btn-modify {
            background-color: #007bff;
            color: #fff;
            border: 1px solid #007bff;
        }

        .btn-modify:hover {
            background-color: #0056b3;
            border-color: #0056b3;
        }

        .blockquote-footer {
            color: #bbb;
        }
   
 


/* CSS */
.button-container {
    display: flex;
    justify-content: center; /* Center the buttons horizontally */
    margin-top: 20px;
    gap: 10px;
}

.button-71 {
    background-color: #0078d0;
    border: 0;
    border-radius: 56px;
    color: #fff;
    cursor: pointer;
    font-family: system-ui, -apple-system, system-ui, "Segoe UI", Roboto, Ubuntu, "Helvetica Neue", sans-serif;
    font-size: 16px; /* Slightly reduce font size */
    font-weight: 600;
    padding: 14px 19px; /* Slightly reduce padding */
    text-align: center;
    text-decoration: none;
    transition: all 0.3s;
    user-select: none;
    -webkit-user-select: none;
    touch-action: manipulation;
    margin-right: 20px; /* Add margin between buttons */
}

.button-71:hover {
    box-shadow: rgba(255, 255, 255, 0.2) 0 3px 15px inset, rgba(0, 0, 0, 0.1) 0 3px 5px, rgba(0, 0, 0, 0.1) 0 10px 13px;
    transform: scale(1.05);
}

@media (min-width: 768px) {
    .button-71 {
        padding: 14px 38px; /* Adjust padding for larger screens */
    }
}

/* Apply styles to the last button */
.button-71:last-child {
    margin-right: 0; /* Remove margin for the last button */
}

  
    </style>
</head>
<body data-instant-intensity="mousedown">
<x-master>
    

        <div class="profile-card">
            <img src="{{ asset('storage/'.$candidat->image) }}" alt="Profile Image" class="profile-image">
            <div class="profile-title">
            {{$candidat->prenom}} {{$candidat->nom}}
            </div>
            <div class="profile-details">
                <p>{{$candidat->created_at }}</p>
                <p>Email : <a href="mailto:{{$candidat->email}}">{{$candidat->email}}</a></p>
                <p>{{$candidat->Description }}</p>
            </div>
    <div class="col">

        <div class="float-right">
              @can('delete',$publication)
                <form action="{{ route('publications.destroy', $publication->id) }}" method="POST" class="d-inline">
                    @csrf
                    @method("DELETE")
                    <button onclick="return confirm('Are you sure you want to delete it?')" class="btn btn-delete">Delete</button>
                </form>
              @endcan
              @can('update',$publication)
                <a class="btn btn-modify" href="{{ route('publications.edit', $publication->id) }}">Modify</a>
             @endcan
      
        </div>
    </div>
        
         </div>

            <h3>Publications</h3>
            <div class="row">
            @foreach ($candidat->publications as $publication)
               <x-publication :canUpdate="auth()->user()->id === $publication->candidat_id" :publication="$publication"/>
            @endforeach
        </div>
         </div>
        </div>
    </x-master>
</body>
</html>




