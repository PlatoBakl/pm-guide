<?php

use Illuminate\Database\Seeder;
use App\Question;
use App\Answer;

class ProcessGroupsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('groups')->truncate();

        DB::table('groups')->insert([
            'title' => "Инициация",
        ]);

        DB::table('groups')->insert([
            'title' => "Планирование",
        ]);

        DB::table('groups')->insert([
            'title' => "Исполнение",
        ]);

        DB::table('groups')->insert([
            'title' => "Контроль",
        ]);

        DB::table('groups')->insert([
            'title' => "Анализ",
        ]);

        DB::table('groups')->insert([
            'title' => "Принятие решения",
        ]);

        DB::table('groups')->insert([
            'title' => "Закрытие",
        ]);

        DB::table('groups')->insert([
            'title' => "Учет и прогнозирование",
        ]);
    }
}
