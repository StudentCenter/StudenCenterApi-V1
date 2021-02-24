<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Extracurricular extends Model
{
    protected $table = 'extracurricular';

    public function ekskul()
    {
        return $this->belongsTo('App\Student');
    }
}
