<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DemandeEmploi extends Model
{
    protected $table = 'demande_emploi';

    protected $fillable = [
        'nom',
        'prenom',
        'email',
        'cv',
        'lettre_motivation',
        'annnonce_id',
        'candidat_id', // Champ pour l'identifiant du candidat
        'status',
    ];

    // Par exemple, si vous avez une relation avec le modèle Annonce
    public function annonce()
    {
        return $this->belongsTo(Annonce::class, 'annonce_id');
    }
    public function candidat()
    {
        return $this->belongsTo(Candidat::class);
    }
}