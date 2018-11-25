<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{

    public $fillable = array('date', 'lesson_seq');

    public function homework()
    {
        return $this->hasOne('App\Homework');
    }

    public function lesson()
    {
        return $this->belongsTo('App\Lesson');
    }
}
