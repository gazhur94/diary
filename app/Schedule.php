<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    protected $fillable = [
                            'date',
                            'lesson_seq',
                            'lesson_id'
                            ];
}
