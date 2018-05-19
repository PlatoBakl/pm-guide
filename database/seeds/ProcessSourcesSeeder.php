<?php

use Illuminate\Database\Seeder;
use App\Question;
use App\Answer;

class ProcessSourcesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sources')->truncate();

        DB::table('sources')->insert([
            'title' => "SWEBOK",
        ]);

        DB::table('sources')->insert([
            'title' => "PRINCE2",
        ]);

        DB::table('sources')->insert([
            'title' => "ISO 21500",
        ]);

        DB::table('sources')->insert([
            'title' => "PMBOK",
        ]);

        DB::table('sources')->insert([
            'title' => "FDD",
        ]);

        DB::table('sources')->insert([
            'title' => "Scrum",
        ]);

        DB::table('sources')->insert([
            'title' => "Предложенные специалистами",
        ]);

        DB::table('sources')->insert([
            'title' => "DSDM",
        ]);
    }
}
