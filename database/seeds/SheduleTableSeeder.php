<?php

use Illuminate\Database\Seeder;

class SheduleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dates = [
                    '2018-11-05',
                    '2018-11-06',
                    '2018-11-07',
                    '2018-11-08',
                    '2018-11-09',
                    '2018-11-10',

                    ];

        foreach ($dates as $date) {
            for ($i = 1; $i<=8; $i++)
            DB::table('schedules')->insert([
                'date' => $date,
                'lesson_seq' => $i,
                'lesson_id' => rand(10, 18),
                'updated_at' => \Carbon\Carbon::now(),
                'created_at' => \Carbon\Carbon::now(),
            ]);
        }
    }
}
