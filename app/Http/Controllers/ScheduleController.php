<?php

namespace App\Http\Controllers;

use App\Schedule;

use Illuminate\Http\Request;
use Carbon\Carbon;


class ScheduleController extends Controller
{
    public function edit(Request $request)
    {
        for ($i=0; $i<8; $i++) {
            dump($request->arr[$i]);
            $shedule = Schedule::where(['date'=>$request->date, 'lesson_seq'=>$i+1])->first();
            $shedule->lesson_id = $request->arr[$i];
            $shedule->save();
            dump($shedule->id);
        }

        return response()->json(['success'=>true]);
    }

    public function get(Request $request)
    {
         $date = $request->date;
         $lastDate = Carbon::parse($date)->addDays(6);

         $schedules = Schedule::with('homework')
                            ->with('lesson')
                            ->where('date', '>=', $date)
                            ->where('date', '<', $lastDate)
                             ->orderBy('schedules.date')
                             ->get();

        $response = [];

         $days = ['mon', 'tue', 'wed', 'thu', 'fri', 'sat', 'sun'];

         for ($i = 0, $count = count($schedules); $i < $count; $i++) {

             $day = $schedules[$i]->date;
             $weekDay = $days[Carbon::parse($schedules[$i]->date)->dayOfWeek-1];
             $lessonSeq = $schedules[$i]->lesson_seq;
             $response[$weekDay]['date'] = $day;
             $response[$weekDay][$lessonSeq]['lesson'] = $schedules[$i]->lesson()->get()[0]->lesson_name;
             $response[$weekDay][$lessonSeq]['homework'] = isset($schedules[$i]->homework()->get()[0]->homework) ?
                                                $schedules[$i]->homework()->get()[0]->homework :
                                                null;
             $response[$weekDay][$lessonSeq]['lessonId'] = $schedules[$i]->lesson()->get()[0]->id;
             $response[$weekDay][$lessonSeq]['scheduleId'] = $schedules[$i]->id;


         }


         return json_encode($response);

    }

}
