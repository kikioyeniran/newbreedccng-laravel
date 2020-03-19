<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sermon extends Model
{
    protected $table  = 'sermons';
    //Primary Key
    public $primaryKey = 'id';
    // Timestamsp
    public $timestamps = true;

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
