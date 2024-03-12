<?php

namespace App\Models;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticable;

class Candidat extends Authenticable
{
    use HasApiTokens, HasFactory, SoftDeletes ,Notifiable;
    protected $table = 'candidats';
    protected $fillable = ['nom','prenom','email','age','password','adresse','CIN','image','Niveau_etude','Description','Departement'];
    protected $dates =['created_at'];
    // public function publications(){
    //     return $this->hasMany(Publication::class);
    // }
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];
}
