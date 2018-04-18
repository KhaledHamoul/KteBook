<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Notification extends Model 
{

    protected $table = 'notifications';
    public $timestamps = true;
    protected $fillable = array('contenu', 'lien');

    public function notification_user()
    {
        return $this->belongsTo('User');
    }

}