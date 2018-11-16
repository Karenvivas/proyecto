<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class activity extends Model
{

    protected $table = 'activity';
    protected $fillable = [
        'nombre', 'descripcion', 'imagen'
    ];

    public function attractions(){
        return $this->belongsToMany('App\attraction');
    }

    public function galleries(){
        return $this->belongsToMany('App\gallery');
    }

    public function registries(){
        return $this->belongsToMany('App\registry');
    }

    public function discount(){
        return $this->hasOne('App\discount');
    }

    public function packages(){
        return $this->belongsToMany('App\package');
    }
}
