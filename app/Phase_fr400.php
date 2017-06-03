<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Phase_fr400 extends Model
{
    protected $table="phase_fr400s";
    protected $fillable=['description'];

    public function cpis(){
        return $this->belongsToMany('App\Cpi');
    }
    public function subphase_fr400s()
    {
        return $this->hasMany('App\Subphase_fr400');
    }
}
