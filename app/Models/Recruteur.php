<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Foundation\Auth\User as Authenticable;

class Recruteur extends Authenticable

{
    use HasApiTokens, HasFactory, Notifiable;
    use HasFactory;
    protected $fillable = ['nom','prenom','CIN','entreprise','logo','ville','email','password','Description'];
    protected $dates =['created_at'];
    public function annonce(){
        return $this->hasMany(Annonce::class);
    }

    
    /**
     * Determine if the user is a Recruteur.
     *
     * @return bool
     */
    public function isRecruteur()
    {
        // Since this is the Recruteur model, return true
        return true;
    }
    
}
