<?php

use Illuminate\Database\Seeder;

class ProcessKnowledgeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $process_id = DB::table('process')->insertGetId([
            'name' => "Анализ осуществимости",
            'source_id' => 4,
        ]);


        DB::table('process_groups')->insert([
            'process_id' => $process_id,
            'group_id' => 1,
        ]);

        DB::table('process_areas')->insert([
            'process_id' => $process_id,
            'area_id' => 1,
        ]);

        $process_id = DB::table('process')->insertGetId([
            'name' => "Планирование процесса",
            'source_id' => 4,
        ]);

        DB::table('process_groups')->insert([
            'process_id' => $process_id,
            'group_id' => 2,
        ]);

        DB::table('process_areas')->insert([
            'process_id' => $process_id,
            'area_id' => 1,
        ]);

        $process_id = DB::table('process')->insertGetId([
            'name' => "Управление планом",
            'source_id' => 4,
        ]);

        DB::table('process_groups')->insert([
            'process_id' => $process_id,
            'group_id' => 2,
        ]);

        DB::table('process_areas')->insert([
            'process_id' => $process_id,
            'area_id' => 1,
        ]);

        $process_id = DB::table('process')->insertGetId([
            'name' => "Осуществление планов",
            'source_id' => 4,
        ]);

        DB::table('process_groups')->insert([
            'process_id' => $process_id,
            'group_id' => 3,
        ]);

        DB::table('process_areas')->insert([
            'process_id' => $process_id,
            'area_id' => 1,
        ]);

        $process_id = DB::table('process')->insertGetId([
            'name' => "Процесс обзора и пересмотра требований",
            'source_id' => 4,
        ]);

        DB::table('process_groups')->insert([
            'process_id' => $process_id,
            'group_id' => 4,
        ]);

        DB::table('process_areas')->insert([
            'process_id' => $process_id,
            'area_id' => 1,
        ]);

        $process_id = DB::table('process')->insertGetId([
            'name' => "Процесс мониторинга",
            'source_id' => 4,
        ]);

        DB::table('process_groups')->insert([
            'process_id' => $process_id,
            'group_id' => 4,
        ]);

        DB::table('process_areas')->insert([
            'process_id' => $process_id,
            'area_id' => 1,
        ]);

        DB::table('process_areas')->insert([
            'process_id' => $process_id,
            'area_id' => 2,
        ]);

        DB::table('process_areas')->insert([
            'process_id' => $process_id,
            'area_id' => 3,
        ]);

        DB::table('process_areas')->insert([
            'process_id' => $process_id,
            'area_id' => 4,
        ]);

        DB::table('process_areas')->insert([
            'process_id' => $process_id,
            'area_id' => 5,
        ]);

        DB::table('process_areas')->insert([
            'process_id' => $process_id,
            'area_id' => 6,
        ]);

        DB::table('process_areas')->insert([
            'process_id' => $process_id,
            'area_id' => 7,
        ]);

        $process_id = DB::table('process')->insertGetId([
            'name' => "Определение удовлетворения требованиям",
            'source_id' => 4,
        ]);

        DB::table('process_groups')->insert([
            'process_id' => $process_id,
            'group_id' => 4,
        ]);

        DB::table('process_areas')->insert([
            'process_id' => $process_id,
            'area_id' => 1,
        ]);

        DB::table('process_areas')->insert([
            'process_id' => $process_id,
            'area_id' => 3,
        ]);
    }
}
