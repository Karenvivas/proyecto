<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class discount extends Model
{

    protected $table = 'discount';
    protected $fillable = [
        'nombre', 'descripcion'
    ];

    public function activity()
    {
        return $this->belongsTo('App\activity');
    }

    public function attraction()
    {
        return $this->belongsTo('App\attraction');
    }

    public function package()
    {
        return $this->belongsTo('App\package');
    }
}
