<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ebook extends Model
{

    protected $table  = 'ebooks';
    //Primary Key
    public $primaryKey = 'id';
    // Timestamsp
    public $timestamps = true;

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
