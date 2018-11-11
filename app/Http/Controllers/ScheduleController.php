<?php

namespace App\Http\Controllers;

use App\Schedule;

use Illuminate\Http\Request;


class ScheduleController extends Controller
{
    public function edit(Request $request)
    {
        for ($i=0; $i<8; $i++) {
            $shedule = Schedule::firstOrNew(['date'=>$request->date, 'lesson_seq'=>$i+1]);
            $shedule->date = $request->date;
            $shedule->lesson_seq = $i+1;
            $shedule->lesson_id = $request->arr[$i];
            $shedule->save();
        }
        return response()->json(['success'=>true]);
    }

    public function get(Request $request)
    {
         dd($request->all());
    }

}
