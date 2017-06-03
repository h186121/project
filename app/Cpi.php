<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cpi extends Model
{
    protected $table = 'cpis';
    protected $fillable = ['number_cpi', 'description', 'status', 's_i', 'tff', 'npt', 's_date', 'e_date', 'runs_id' ];

    public function run(){
        return $this->belongsTo('App\Run');
    }

    public function phase_fr400s(){
        return $this->belongsToMany('App\Phase_fr400');
    }

    public function action_plans()
    {
        return $this->hasMany('App\Action_plan');
    }
}
