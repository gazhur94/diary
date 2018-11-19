<?php

use Illuminate\Database\Seeder;

class LessonsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $lessons = [
                    'Математика',
                    'Фізика',
                    'Астрономія',
                    'Правознавсво',
                    'Українська мова',
                    'Історія України',
                    'Хімія',
                    'Біологія',
                    'Географія'
                ];

        foreach ($lessons as $lesson) {
            DB::table('lessons')->insert([
                'lesson_name' => $lesson,
                'updated_at' => \Carbon\Carbon::now(),
                'created_at' => \Carbon\Carbon::now(),
            ]);

        }

    }
}
