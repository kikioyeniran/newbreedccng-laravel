<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $table  = 'contacts';
    //Primary Key
    public $primaryKey = 'id';
    // Timestamsp
    public $timestamps = true;

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
