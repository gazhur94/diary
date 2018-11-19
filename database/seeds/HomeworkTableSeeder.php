<?php

use Illuminate\Database\Seeder;

class HomeworkTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        for ($i = 1; $i<=48; $i++)
            DB::table('homeworks')->insert([
                'schedule_id' => $i,
                'homework' => $faker->word,
                'updated_at' => \Carbon\Carbon::now(),
                'created_at' => \Carbon\Carbon::now(),
            ]);

    }
}
