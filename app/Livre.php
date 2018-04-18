<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Livre extends Model 
{

    protected $table = 'livres';
    public $timestamps = false;
    protected $fillable = array('id', 'titre', 'domaine' , 'etat_livre');

    public function livre_produit()
    {
        return $this->belongsTo('Produit');
    }

}