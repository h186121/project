<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Rig extends Model
{
    protected $table="rigs";
    protected $fillable=['rig_name'];

    public function wells(){
        return $this->belongsToMany('App\Well');
    }

    public function customers(){
        return $this->belongsToMany('App\Customer');
    }

}
