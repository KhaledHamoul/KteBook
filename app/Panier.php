<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Panier extends Model 
{

    protected $table = 'paniers';
    public $timestamps = false;
    protected $fillable = array('id_user', 'prod_id');

}