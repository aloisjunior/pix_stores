<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tipo extends Model
{
    protected $table = 'tipo';
    protected $guarded = [];

//    protected $hidden = ['timestamp'];
//    public $timestamps = false;
    public function items()
    {
        return $this->hasMany(Item::class);
    }

}
