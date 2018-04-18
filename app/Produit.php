<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produit extends Model 
{

    protected $table = 'produits';
    public $timestamps = true;
    protected $fillable = array('user_id', 'type_prod', 'type_offre', 'etat_offre' , 'prixDuree' , 'description', 'lieu');

    public function prod_user_offert()
    {
        return $this->belongsTo('User');
    }

    public function prod_livre()
    {
        return $this->hasMany('App\Livre');
    }

    public function prod_user_offerts()
    {
        return $this->belongsToMany('User');
    }

    public function prod_commentaire()
    {
        return $this->hasMany('Commentaire');
    }

    public function prod_photo()
    {
        return $this->hasMany('App\Photo');
    }

    public function prod_vente()
    {
        return $this->hasOne('Ventes');
    }

    public function prod_fin_offre()
    {
        return $this->hasOne('Fin_offre');
    }

}