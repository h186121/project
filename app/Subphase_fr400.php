<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subphase_fr400 extends Model
{
    protected $table = 'subphase_fr400s';
    protected $fillable = ['description', 'phase_fr400s_id', 'status_id'];

    public function phase_fr400()
    {
        return $this->belongsTo('App\Phase_fr400');
    }

    public function statu()
    {
        return $this->belongsTo('App\Statu');
    }
}