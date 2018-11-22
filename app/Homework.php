<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Homework extends Model
{
    public function shedule()
    {
        return $this->belongsTo('App\Shedule');
    }
}
