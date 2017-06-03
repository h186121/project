<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Well extends Model
{
    protected $table = 'wells';
    protected $fillable = ['well_name', 'zspo'];

    public function runs(){
        return $this->hasMany('App\Run', 'wells_id');

    }

    public function rigs()
    {
        return $this->belongsToMany('App\Rig');
    }


}
