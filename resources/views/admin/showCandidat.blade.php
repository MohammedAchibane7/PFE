<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Styled Table</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
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
   

  
</style>

<body>
<x-Adminmaster>

        <div class="profile-card">
            <img src="{{ asset('storage/'.$candidat->image) }}" alt="Profile Image" class="profile-image">
            <div class="profile-title">
            {{$candidat->prenom}} {{$candidat->nom}}
            </div>
            <div class="profile-details">

            <div class="row">
    <h5 class="col-md-3">Age :</h5>
    <p class="col-md-9">{{$candidat->age }}</p>
</div>
<div class="row">
    <h5 class="col-md-3">Adresse :</h5>
    <p class="col-md-9">{{$candidat->adresse }}</p>
</div>
<div class="row">
    <h5 class="col-md-3">CIN :</h5>
    <p class="col-md-9">{{$candidat->CIN }}</p>
</div>
<div class="row">
    <h5 class="col-md-3">Niveau d'Etude :</h5>
    <p class="col-md-9">{{$candidat->Niveau_etude }}</p>
</div>
<div class="row">
    <h5 class="col-md-3">Département :</h5>
    <p class="col-md-9">{{$candidat->Departement }}</p>
</div>
<div class="row">
    <h5 class="col-md-3">Created At :</h5>
    <p class="col-md-9">{{$candidat->created_at }}</p>
</div>
<div class="row">
    <h5 class="col-md-3">Email :</h5>
    <p class="col-md-9"><a href="mailto:{{$candidat->email}}">{{$candidat->email}}</a></p>
</div>
<div class="row">
    <h5 class="col-md-3">Description :</h5>
    <p class="col-md-9">{{ Str::limit($candidat->Description,30)}}</p>
</div>
  </div>
</x-Adminmaster>
</body>
</html>
