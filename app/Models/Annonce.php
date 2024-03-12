<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Annonce extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable =[
        'titre',
        'type',
        'departement',
        'description',
        'salaire',
        'recruteur_id'
    ];
    public function Recruteur(){
        return $this->belongsTo(Recruteur::class);
    }
    public function demandes()
    {
        return $this->hasMany(DemandeEmploi::class);
    }
}
