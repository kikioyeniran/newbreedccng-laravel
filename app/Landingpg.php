<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Landingpg extends Model
{
    protected $table  = 'landingpgs';
    //Primary Key
    public $primaryKey = 'id';
    // Timestamsp
    public $timestamps = true;

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
