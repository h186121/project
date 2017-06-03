<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Action_plan extends Model
{
    protected $table = 'status';
    protected $fillable = ['description', 'e_date', 'status_id', 'cpis_id'];

    public function statu()
    {
        return $this->belongsTo('App\Statu');
    }

    public function cpi()
    {
        return $this->belongsTo('App\Cpi');
    }
}
