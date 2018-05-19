<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ScrumSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('methodologies')->insert([
            'id' => 5,
            'name' => "Scrum"
        ]);

        DB::table('methodology_questionnaire')->insert([
            'methodology_id' => 5,
            'question_id' => 1,
            'answer_id' => 1,
            'points' => 0.15,
        ]);

        DB::table('methodology_questionnaire')->insert([
            'methodology_id' => 5,
            'question_id' => 1,
            'answer_id' => 2,
            'points' => 0.25,
        ]);

        DB::table('methodology_questionnaire')->insert([
            'methodology_id' => 5,
            'question_id' => 1,
            'answer_id' => 3,
            'points' => 0.5,
        ]);

        DB::table('methodology_questionnaire')->insert([
            'methodology_id' => 5,
            'question_id' => 1,
            'answer_id' => 4,
            'points' => 1,
        ]);

        DB::table('methodology_questionnaire')->insert([
            'methodology_id' => 5,
            'question_id' => 2,
            'answer_id' => 2,
            'points' => 0.25,
        ]);

        DB::table('methodology_questionnaire')->insert([
            'methodology_id' => 5,
            'question_id' => 2,
            'answer_id' => 3,
            'points' => 1,
        ]);

        DB::table('methodology_questionnaire')->insert([
            'methodology_id' => 5,
            'question_id' => 2,
            'answer_id' => 4,
            'points' => 1,
        ]);

        DB::table('methodology_questionnaire')->insert([
            'methodology_id' => 5,
            'question_id' => 3,
            'answer_id' => 2,
            'points' => 0.25,
        ]);

        DB::table('methodology_questionnaire')->insert([
            'methodology_id' => 5,
            'question_id' => 3,
            'answer_id' => 3,
            'points' => 0.75,
        ]);

        DB::table('methodology_questionnaire')->insert([
            'methodology_id' => 5,
            'question_id' => 3,
            'answer_id' => 4,
            'points' => 1,
        ]);

        DB::table('methodology_questionnaire')->insert([
            'methodology_id' => 5,
            'question_id' => 4,
            'answer_id' => 3,
            'points' => 1,
        ]);

        DB::table('methodology_questionnaire')->insert([
            'methodology_id' => 5,
            'question_id' => 4,
            'answer_id' => 4,
            'points' => 1,
        ]);

        DB::table('methodology_questionnaire')->insert([
            'methodology_id' => 5,
            'question_id' => 5,
            'answer_id' => 3,
            'points' => 0.75,
        ]);

        DB::table('methodology_questionnaire')->insert([
            'methodology_id' => 5,
            'question_id' => 5,
            'answer_id' => 4,
            'points' => 1,
        ]);

        DB::table('methodology_questionnaire')->insert([
            'methodology_id' => 5,
            'question_id' => 6,
            'answer_id' => 2,
            'points' => 0.25,
        ]);

        DB::table('methodology_questionnaire')->insert([
            'methodology_id' => 5,
            'question_id' => 6,
            'answer_id' => 3,
            'points' => 0.75,
        ]);

        DB::table('methodology_questionnaire')->insert([
            'methodology_id' => 5,
            'question_id' => 6,
            'answer_id' => 4,
            'points' => 1,
        ]);

        DB::table('methodology_questionnaire')->insert([
            'methodology_id' => 5,
            'question_id' => 7,
            'answer_id' => 2,
            'points' => 0.25,
        ]);

        DB::table('methodology_questionnaire')->insert([
            'methodology_id' => 5,
            'question_id' => 7,
            'answer_id' => 3,
            'points' => 1,
        ]);

        DB::table('methodology_questionnaire')->insert([
            'methodology_id' => 5,
            'question_id' => 7,
            'answer_id' => 4,
            'points' => 1,
        ]);

        DB::table('methodology_questionnaire')->insert([
            'methodology_id' => 5,
            'question_id' => 8,
            'answer_id' => 2,
            'points' => 0.5,
        ]);

        DB::table('methodology_questionnaire')->insert([
            'methodology_id' => 5,
            'question_id' => 8,
            'answer_id' => 3,
            'points' => 1,
        ]);

        DB::table('methodology_questionnaire')->insert([
            'methodology_id' => 5,
            'question_id' => 8,
            'answer_id' => 4,
            'points' => 1,
        ]);

        DB::table('methodology_questionnaire')->insert([
            'methodology_id' => 5,
            'question_id' => 9,
            'answer_id' => 3,
            'points' => 1,
        ]);

        DB::table('methodology_questionnaire')->insert([
            'methodology_id' => 5,
            'question_id' => 9,
            'answer_id' => 4,
            'points' => 1,
        ]);

        DB::table('methodology_questionnaire')->insert([
            'methodology_id' => 5,
            'question_id' => 10,
            'answer_id' => 3,
            'points' => 0.75,
        ]);

        DB::table('methodology_questionnaire')->insert([
            'methodology_id' => 5,
            'question_id' => 10,
            'answer_id' => 4,
            'points' => 1,
        ]);

        DB::table('methodology_questionnaire')->insert([
            'methodology_id' => 5,
            'question_id' => 11,
            'answer_id' => 2,
            'points' => 0.5,
        ]);

        DB::table('methodology_questionnaire')->insert([
            'methodology_id' => 5,
            'question_id' => 11,
            'answer_id' => 3,
            'points' => 1,
        ]);

        DB::table('methodology_questionnaire')->insert([
            'methodology_id' => 5,
            'question_id' => 11,
            'answer_id' => 4,
            'points' => 1,
        ]);

        DB::table('methodology_questionnaire')->insert([
            'methodology_id' => 5,
            'question_id' => 12,
            'answer_id' => 2,
            'points' => 1,
        ]);

        DB::table('methodology_questionnaire')->insert([
            'methodology_id' => 5,
            'question_id' => 12,
            'answer_id' => 3,
            'points' => 1,
        ]);

        DB::table('methodology_questionnaire')->insert([
            'methodology_id' => 5,
            'question_id' => 12,
            'answer_id' => 4,
            'points' => 1,
        ]);

        DB::table('methodology_questionnaire')->insert([
            'methodology_id' => 5,
            'question_id' => 13,
            'answer_id' => 3,
            'points' => 1,
        ]);

        DB::table('methodology_questionnaire')->insert([
            'methodology_id' => 5,
            'question_id' => 13,
            'answer_id' => 4,
            'points' => 1,
        ]);

        DB::table('methodology_questionnaire')->insert([
            'methodology_id' => 5,
            'question_id' => 14,
            'answer_id' => 3,
            'points' => 1,
        ]);

        DB::table('methodology_questionnaire')->insert([
            'methodology_id' => 5,
            'question_id' => 14,
            'answer_id' => 4,
            'points' => 1,
        ]);

        DB::table('methodology_questionnaire')->insert([
            'methodology_id' => 5,
            'question_id' => 15,
            'answer_id' => 2,
            'points' => 0.25,
        ]);

        DB::table('methodology_questionnaire')->insert([
            'methodology_id' => 5,
            'question_id' => 15,
            'answer_id' => 3,
            'points' => 0.75,
        ]);

        DB::table('methodology_questionnaire')->insert([
            'methodology_id' => 5,
            'question_id' => 15,
            'answer_id' => 4,
            'points' => 1,
        ]);

        DB::table('methodology_questionnaire')->insert([
            'methodology_id' => 5,
            'question_id' => 16,
            'answer_id' => 1,
            'points' => 0.25,
        ]);

        DB::table('methodology_questionnaire')->insert([
            'methodology_id' => 5,
            'question_id' => 16,
            'answer_id' => 2,
            'points' => 0.5,
        ]);

        DB::table('methodology_questionnaire')->insert([
            'methodology_id' => 5,
            'question_id' => 16,
            'answer_id' => 3,
            'points' => 0.75,
        ]);

        DB::table('methodology_questionnaire')->insert([
            'methodology_id' => 5,
            'question_id' => 16,
            'answer_id' => 4,
            'points' => 1,
        ]);

        DB::table('methodology_questionnaire')->insert([
            'methodology_id' => 5,
            'question_id' => 17,
            'answer_id' => 2,
            'points' => 0.5,
        ]);

        DB::table('methodology_questionnaire')->insert([
            'methodology_id' => 5,
            'question_id' => 17,
            'answer_id' => 3,
            'points' => 1,
        ]);

        DB::table('methodology_questionnaire')->insert([
            'methodology_id' => 5,
            'question_id' => 17,
            'answer_id' => 4,
            'points' => 1,
        ]);

        DB::table('methodology_questionnaire')->insert([
            'methodology_id' => 5,
            'question_id' => 18,
            'answer_id' => 2,
            'points' => 0.25,
        ]);

        DB::table('methodology_questionnaire')->insert([
            'methodology_id' => 5,
            'question_id' => 18,
            'answer_id' => 3,
            'points' => 1,
        ]);

        DB::table('methodology_questionnaire')->insert([
            'methodology_id' => 5,
            'question_id' => 18,
            'answer_id' => 4,
            'points' => 1,
        ]);

        DB::table('methodology_questionnaire')->insert([
            'methodology_id' => 5,
            'question_id' => 19,
            'answer_id' => 3,
            'points' => 1,
        ]);

        DB::table('methodology_questionnaire')->insert([
            'methodology_id' => 5,
            'question_id' => 19,
            'answer_id' => 4,
            'points' => 1,
        ]);

        DB::table('methodology_questionnaire')->insert([
            'methodology_id' => 5,
            'question_id' => 20,
            'answer_id' => 1,
            'points' => 0.5,
        ]);

        DB::table('methodology_questionnaire')->insert([
            'methodology_id' => 5,
            'question_id' => 20,
            'answer_id' => 2,
            'points' => 0.75,
        ]);

        DB::table('methodology_questionnaire')->insert([
            'methodology_id' => 5,
            'question_id' => 20,
            'answer_id' => 3,
            'points' => 1,
        ]);

        DB::table('methodology_questionnaire')->insert([
            'methodology_id' => 5,
            'question_id' => 20,
            'answer_id' => 4,
            'points' => 1,
        ]);

        DB::table('methodology_questionnaire')->insert([
            'methodology_id' => 5,
            'question_id' => 21,
            'answer_id' => 1,
            'points' => 1,
        ]);

        DB::table('methodology_questionnaire')->insert([
            'methodology_id' => 5,
            'question_id' => 21,
            'answer_id' => 2,
            'points' => 1,
        ]);

        DB::table('methodology_questionnaire')->insert([
            'methodology_id' => 5,
            'question_id' => 21,
            'answer_id' => 3,
            'points' => 1,
        ]);

        DB::table('methodology_questionnaire')->insert([
            'methodology_id' => 5,
            'question_id' => 21,
            'answer_id' => 4,
            'points' => 1,
        ]);

        DB::table('methodology_questionnaire')->insert([
            'methodology_id' => 5,
            'question_id' => 22,
            'answer_id' => 1,
            'points' => 1,
        ]);

        DB::table('methodology_questionnaire')->insert([
            'methodology_id' => 5,
            'question_id' => 22,
            'answer_id' => 2,
            'points' => 1,
        ]);

        DB::table('methodology_questionnaire')->insert([
            'methodology_id' => 5,
            'question_id' => 22,
            'answer_id' => 3,
            'points' => 1,
        ]);

        DB::table('methodology_questionnaire')->insert([
            'methodology_id' => 5,
            'question_id' => 22,
            'answer_id' => 4,
            'points' => 1,
        ]);

        DB::table('methodology_questionnaire')->insert([
            'methodology_id' => 5,
            'question_id' => 23,
            'answer_id' => 1,
            'points' => 1,
        ]);

        DB::table('methodology_questionnaire')->insert([
            'methodology_id' => 5,
            'question_id' => 23,
            'answer_id' => 2,
            'points' => 1,
        ]);

        DB::table('methodology_questionnaire')->insert([
            'methodology_id' => 5,
            'question_id' => 23,
            'answer_id' => 3,
            'points' => 1,
        ]);

        DB::table('methodology_questionnaire')->insert([
            'methodology_id' => 5,
            'question_id' => 23,
            'answer_id' => 4,
            'points' => 1,
        ]);
    }
}
