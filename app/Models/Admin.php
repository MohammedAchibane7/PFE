<?php
namespace App\Models;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticable;

class Admin extends Authenticable
{
    use HasApiTokens, HasFactory, SoftDeletes ,Notifiable;
    protected $table = 'admins';
    protected $fillable = ['nom','prenom','email','password','CIN'];
    protected $dates =['created_at'];
}
