<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model 
{

    protected $table = 'photos';
    public $timestamps = false;
    protected $fillable = array('chemin');

    public function photo_prod()
    {
        return $this->belongsTo('Produit');
    }

}