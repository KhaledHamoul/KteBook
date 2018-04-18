<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reponse extends Model 
{

    protected $table = 'reponses';
    public $timestamps = true;
    protected $fillable = array('comment_id', 'ansewer');

    public function reponse_user()
    {
        return $this->belongsTo('User');
    }

    public function reponse_commentaire()
    {
        return $this->belongsTo('Commentaire');
    }

}