<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class registry extends Model
{
    protected $table = 'registry';
    protected $fillable = [
        'nombre', 'asunto', 'correo', 'informacion'
    ];

    public function attractions(){
        return $this->belongsToMany('App\attraction');
    }

    public function activities(){
        return $this->belongsToMany('App\activity');
    }

    public function packages(){
        return $this->belongsToMany('App\package');
    }
}
