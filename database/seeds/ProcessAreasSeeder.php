<?php

use Illuminate\Database\Seeder;
use App\Question;
use App\Answer;

class ProcessAreasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//        DB::table('areas')->truncate();

        DB::table('areas')->insert([
            'title' => "Управление интеграцией проекта",
        ]);

        DB::table('areas')->insert([
            'title' => "Управление содержанием проекта",
        ]);

        DB::table('areas')->insert([
            'title' => "Управление расписанием проекта",
        ]);

        DB::table('areas')->insert([
            'title' => "Управление стоимостью проекта",
        ]);

        DB::table('areas')->insert([
            'title' => "Управление качеством проекта",
        ]);

        DB::table('areas')->insert([
            'title' => "Управление ресурсами проекта",
        ]);

        DB::table('areas')->insert([
            'title' => "Управление рисками проекта",
        ]);

        DB::table('areas')->insert([
            'title' => "Управление заинтересованными сторонами проекта",
        ]);

        DB::table('areas')->insert([
            'title' => "Управление закупками проекта",
        ]);

        DB::table('areas')->insert([
            'title' => "Управление коммуникациями проекта",
        ]);

    }
}
