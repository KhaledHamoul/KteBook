<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Commentaire extends Model 
{

    protected $table = 'commentaires';
    public $timestamps = true;
    protected $fillable = array('comment');

    public function commentaire_prod()
    {
        return $this->belongsTo('Produit');
    }

    public function commentaire_reponse()
    {
        return $this->hasMany('Reponse');
    }

    public function commentaire_user()
    {
        return $this->belongsTo('User');
    }

}