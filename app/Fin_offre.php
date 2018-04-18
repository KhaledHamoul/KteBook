<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fin_offre extends Model 
{

    protected $table = 'fins_offres';
    public $timestamps = true;

    public function fin_offre_prod()
    {
        return $this->belongsTo('Produit');
    }

}