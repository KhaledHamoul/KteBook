<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model 
{

    protected $table = 'contacts';
    public $timestamps = true;

    public function contact_user()
    {
        return $this->belongsTo('User');
    }

}