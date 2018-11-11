<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Schedule;
use App\Lesson;

class DiaryController extends Controller
{
    public function index()
    {
        $lessons = Lesson::get();
        //dd($lessons);
        return view('home')->with(['lessons' => $lessons]);
    }
}
