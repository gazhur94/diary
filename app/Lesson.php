<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    public function shedule()
    {
        return $this->hasOne('App\Shedule');
    }
}
