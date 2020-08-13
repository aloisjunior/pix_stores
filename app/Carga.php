<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Carga extends Model
{
    protected $table = 'carga';

    protected $guarded = [];

    public function items()
    {
        return $this->belongsToMany(Item::class, 'carga_item');
    }
}
