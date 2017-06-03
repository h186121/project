<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Run extends Model
{
    protected $table = 'runs';
    protected $fillable = ['run_number', 'wells_id', 'phase_wells_id', 'tool_sizes_id'];

    public function cpis(){
        return $this->hasMany('App\Cpi');
    }

    public function tool_size(){
        return $this->belongsTo('App\Tool_size');
    }

    public function phase_well(){
        return $this->belongsTo('App\Phase_well');
    }

    public function well(){
        return $this->belongsTo('App\Well');
    }
}