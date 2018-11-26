<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class attraction extends Model
{
    protected $table = 'attraction';
    protected $fillable = [
        'nombre', 'direccion', 'imagen', 'descripcion', 'precio', 'tipo'
    ];

    public function registries(){
        return $this->belongsToMany('App\registry');
    }

    
    public function discount(){
        return $this->belongsTo('App\discount');
    }


    public function packages(){
        return $this->belongsToMany('App\package');
    }

    public function galleries(){
        return $this->belongsToMany('App\gallery');
    }


    public function activities(){
        return $this->belongsToMany('App\activity');
    }


}
