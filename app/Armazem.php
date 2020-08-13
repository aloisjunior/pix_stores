<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Armazem extends Model
{
    protected $table = 'armazem';

    protected $guarded = [];

    public function carga()
    {
        return $this->belongsToMany(Carga::class, 'armazem_carga');
    }
}
