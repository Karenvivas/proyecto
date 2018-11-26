<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class package extends Model
{

    protected $table = 'package';
    protected $fillable = [
        'nombre', 'actividades', 'precio', 'imagen', 'descripcion'
    ];

    public function attractions(){
        return $this->belongsToMany('App\attraction');
    }

    public function activities(){
        return $this->belongsToMany('App\activity');
    }

    public function Users(){
        return $this->belongsToMany('App\User');
    }

    public function registries(){
        return $this->belongsToMany('App\registry');
    }

    public function discount(){
        return $this->belongsTo('App\discount');
    }
}
