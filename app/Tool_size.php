<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tool_size extends Model
{
    protected $table = 'tool_sizes';
    protected $fillable = ['number'];

    public function runs()
    {
        return $this->hasMany('App\Run', 'tool_sizes_id');
    }
}
