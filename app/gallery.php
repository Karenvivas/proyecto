<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class gallery extends Model
{
    protected $table = 'gallery';
    protected $fillable = [
        'nombre'
    ];

    public function attractions(){
        return $this->belongsToMany('App\attraction');
    }

    public function activities(){
        return $this->belongsToMany('App\activity');
    }
}
