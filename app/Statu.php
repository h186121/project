<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Statu extends Model
{
    protected $table = 'status';
    protected $fillable = ['description'];

    public function subphase_fr400s()
    {
        return $this->hasMany('App\Subphase_fr400');
    }
    public function action_plans()
    {
        return $this->hasMany('App\Action_plan');
    }
}
