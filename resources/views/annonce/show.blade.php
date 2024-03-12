<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <h1>{{ $annonce->titre }}</h1>
        <p>{{ $annonce->description }}</p>

        <h2>Candidats ayant postulé :</h2>
        @if(count($demandesEmploi) > 0)
            <ul>
                @foreach($demandesEmploi as $demandeEmploi)
                    <li>{{ $demandeEmploi->nom }}</li>
                    <li>{{ $demandeEmploi->prenom }}</li>
                    
                    <a href="{{ asset('storage/' . $demandeEmploi->cv) }}" class="btn btn-primary">Télécharger CV</a>
                    <a href="{{ asset('storage/' . $demandeEmploi->lettre_motivation) }}" class="btn btn-primary">Télécharger Lettre de Motivation</a>
                    <!-- Ajoutez d'autres détails de la demande d'emploi selon vos besoins -->
                @endforeach
            </ul>
        @else
            <p>Aucun candidat n'a postulé à cette annonce pour le moment.</p>
        @endif
    </div>
</body>
</html>