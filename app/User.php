<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Foundation\Auth\User as Authenticatables;

class User extends Authenticatables
{

   use Notifiable;

    protected $table = 'users';
    public $timestamps = true;
    protected $fillable = array('email', 'user_name', 'nom', 'prenom', 'password', 'wilaya');

    public function user_contact()
    {
        return $this->hasMany('Contact');
    }

    public function user_notification()
    {
        return $this->hasMany('Notification');
    }

    public function user_prod()
    {
        return $this->belongsToMany('App\Produit');
    }

    public function user_commentaire()
    {
        return $this->hasMany('Commentaire');
    }

    public function user_reponse()
    {
        return $this->hasMany('Reponse');
    }

    public function user_prod_offert()
    {
        return $this->hasMany('App\Produit');
    }

}