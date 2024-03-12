<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Détails de l'annonce</title>
</head>
<body>
    <div class="container">
        <h1>Demandes d'emploi</h1>

        @foreach($annonces as $annonce)
            <div class="card mb-4">
                <div class="card-header">
                    {{ $annonce->titre }}
                </div>
                <div class="card-body">
                    @if(count($demandesEmploi[$annonce->id]) > 0)
                        <ul>
                            @foreach($demandesEmploi[$annonce->id] as $demandeEmploi)
                                <li>
                                    <strong>Nom:</strong> {{ $demandeEmploi->nom }}<br>
                                    <strong>Prénom:</strong> {{ $demandeEmploi->prenom }}<br>
                                    <!-- Ajoutez d'autres détails de la demande d'emploi selon vos besoins -->
                                </li>
                            @endforeach
                        </ul>
                    @else
                        <p>Aucune demande d'emploi pour cette annonce.</p>
                    @endif
                </div>
            </div>
        @endforeach
    </div>


    {{-- <h1>Détails de l'annonce</h1>
    <p>Titre : {{ $annonce->titre }}</p>
    <p>Description : {{ $annonce->description }}</p>
    <!-- Afficher d'autres détails de l'annonce selon votre modèle -->

    <h2>Candidats ayant postulé :</h2>
    @if($candidats->count() > 0)
        <ul>
            @foreach ($candidats as $candidat)
                <li>
                    <p>Nom : {{ $candidat->nom }}</p>
                    <p>Prénom : {{ $candidat->prenom }}</p>
                    <p>Email : {{ $candidat->email }}</p>
                    <p>
                        CV : 
                        <a href="{{ asset('storage/demandes' . $demande->cv) }}" target="_blank" class="btn btn-primary">Télécharger</a>
                    </p>
                    <p>
                        Lettre de motivation :
                        <a href="{{ asset('storage/demandes' . $demande->lettre_motivation) }}" target="_blank" class="btn btn-primary">Télécharger</a>
                    </p>
                    <!-- Afficher d'autres informations sur le candidat si nécessaire -->
                </li>
            @endforeach
        </ul>
    @else
        <p>Aucun candidat n'a postulé à cette annonce pour le moment.</p>
    @endif --}}
</body>
</html>