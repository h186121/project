<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Phase_well extends Model
{
    protected $table = 'phase_wells';
    protected $fillable = ['phase_name'];

    public function runs()
    {
        return $this->hasMany('App\Run', 'phase_id');
    }
}
