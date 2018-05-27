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
            'source_id' => 1,
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
            'source_id' => 1,
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
            'source_id' => 1,
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
            'source_id' => 1,
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
            'source_id' => 1,
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
            'source_id' => 1,
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
            'source_id' => 1,
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

        $process_id = DB::table('process')->insertGetId([
            'name' => "Процесс контроля",
            'source_id' => 1,
        ]);

        DB::table('process_groups')->insert([
            'process_id' => $process_id,
            'group_id' => 5,
        ]);

        DB::table('process_groups')->insert([
            'process_id' => $process_id,
            'group_id' => 6,
        ]);

        DB::table('process_areas')->insert([
            'process_id' => $process_id,
            'area_id' => 1,
        ]);

        $process_id = DB::table('process')->insertGetId([
            'name' => "Определение закрытия",
            'source_id' => 1,
        ]);

        DB::table('process_groups')->insert([
            'process_id' => $process_id,
            'group_id' => 7,
        ]);

        DB::table('process_areas')->insert([
            'process_id' => $process_id,
            'area_id' => 1,
        ]);

        DB::table('process_areas')->insert([
            'process_id' => $process_id,
            'area_id' => 8,
        ]);

        $process_id = DB::table('process')->insertGetId([
            'name' => "Закрытие операций",
            'source_id' => 1,
        ]);

        DB::table('process_groups')->insert([
            'process_id' => $process_id,
            'group_id' => 7,
        ]);

        DB::table('process_areas')->insert([
            'process_id' => $process_id,
            'area_id' => 1,
        ]);

        $process_id = DB::table('process')->insertGetId([
            'name' => "Определение требований и переговоры по ним",
            'source_id' => 1,
        ]);

        DB::table('process_groups')->insert([
            'process_id' => $process_id,
            'group_id' => 2,
        ]);

        DB::table('process_groups')->insert([
            'process_id' => $process_id,
            'group_id' => 1,
        ]);

        DB::table('process_areas')->insert([
            'process_id' => $process_id,
            'area_id' => 2,
        ]);

        DB::table('process_areas')->insert([
            'process_id' => $process_id,
            'area_id' => 8,
        ]);

        $process_id = DB::table('process')->insertGetId([
            'name' => "Определение поставок",
            'source_id' => 1,
        ]);

        DB::table('process_groups')->insert([
            'process_id' => $process_id,
            'group_id' => 2,
        ]);

        DB::table('process_areas')->insert([
            'process_id' => $process_id,
            'area_id' => 2,
        ]);

        DB::table('process_areas')->insert([
            'process_id' => $process_id,
            'area_id' => 9,
        ]);

        $process_id = DB::table('process')->insertGetId([
            'name' => "Оценка усилий, расписания и стоимости",
            'source_id' => 1,
        ]);

        DB::table('process_groups')->insert([
            'process_id' => $process_id,
            'group_id' => 2,
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
            'area_id' => 6,
        ]);

        $process_id = DB::table('process')->insertGetId([
            'name' => "Управление качеством",
            'source_id' => 1,
        ]);

        DB::table('process_groups')->insert([
            'process_id' => $process_id,
            'group_id' => 2,
        ]);

        DB::table('process_areas')->insert([
            'process_id' => $process_id,
            'area_id' => 5,
        ]);

        $process_id = DB::table('process')->insertGetId([
            'name' => "Осуществление процесса измерения",
            'source_id' => 1,
        ]);

        DB::table('process_groups')->insert([
            'process_id' => $process_id,
            'group_id' => 8,
        ]);

        DB::table('process_areas')->insert([
            'process_id' => $process_id,
            'area_id' => 5,
        ]);

        $process_id = DB::table('process')->insertGetId([
            'name' => "Обзор и оценка производительности",
            'source_id' => 1,
        ]);

        DB::table('process_groups')->insert([
            'process_id' => $process_id,
            'group_id' => 4,
        ]);

        DB::table('process_areas')->insert([
            'process_id' => $process_id,
            'area_id' => 5,
        ]);

        DB::table('process_areas')->insert([
            'process_id' => $process_id,
            'area_id' => 6,
        ]);

        $process_id = DB::table('process')->insertGetId([
            'name' => "Распределение ресурсов",
            'source_id' => 1,
        ]);

        DB::table('process_groups')->insert([
            'process_id' => $process_id,
            'group_id' => 2,
        ]);

        DB::table('process_areas')->insert([
            'process_id' => $process_id,
            'area_id' => 6,
        ]);

        $process_id = DB::table('process')->insertGetId([
            'name' => "Отчетность",
            'source_id' => 1,
        ]);

        DB::table('process_groups')->insert([
            'process_id' => $process_id,
            'group_id' => 8,
        ]);

        DB::table('process_areas')->insert([
            'process_id' => $process_id,
            'area_id' => 10,
        ]);

        $process_id = DB::table('process')->insertGetId([
            'name' => "Управление рисками",
            'source_id' => 1,
        ]);

        DB::table('process_groups')->insert([
            'process_id' => $process_id,
            'group_id' => 2,
        ]);

        DB::table('process_areas')->insert([
            'process_id' => $process_id,
            'area_id' => 7,
        ]);

        $process_id = DB::table('process')->insertGetId([
            'name' => "Приобретение программного обеспечения и управление контрактом поставщика",
            'source_id' => 1,
        ]);

        DB::table('process_groups')->insert([
            'process_id' => $process_id,
            'group_id' => 3,
        ]);

        DB::table('process_areas')->insert([
            'process_id' => $process_id,
            'area_id' => 9,
        ]);

        $process_id = DB::table('process')->insertGetId([
            'name' => "Извлечение предыдущих уроков",
            'source_id' => 2,
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
            'name' => "Подготовка наброска (основных положений) бизнес-кейса",
            'source_id' => 2,
        ]);

        DB::table('process_groups')->insert([
            'process_id' => $process_id,
            'group_id' => 1,
        ]);

        DB::table('process_areas')->insert([
            'process_id' => $process_id,
            'area_id' => 1,
        ]);

        DB::table('process_areas')->insert([
            'process_id' => $process_id,
            'area_id' => 2,
        ]);

        $process_id = DB::table('process')->insertGetId([
            'name' => "Выбор проектного подхода и сборка проектного брифа (резюме, задания)",
            'source_id' => 2,
        ]);

        DB::table('process_groups')->insert([
            'process_id' => $process_id,
            'group_id' => 1,
        ]);

        DB::table('process_areas')->insert([
            'process_id' => $process_id,
            'area_id' => 1,
        ]);

        DB::table('process_areas')->insert([
            'process_id' => $process_id,
            'area_id' => 6,
        ]);

        $process_id = DB::table('process')->insertGetId([
            'name' => "Авторизация инициации",
            'source_id' => 2,
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
            'name' => "Авторизация проекта",
            'source_id' => 2,
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
            'name' => "Сборка документации инициации проекта",
            'source_id' => 2,
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
            'name' => "Планирование стадии инициации",
            'source_id' => 2,
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
            'name' => "Авторизация плана этапа или плана исключений",
            'source_id' => 2,
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
            'name' => "Разработка плана проекта",
            'source_id' => 2,
        ]);

        DB::table('process_groups')->insert([
            'process_id' => $process_id,
            'group_id' => 2,
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
            'area_id' => 6,
        ]);

        DB::table('process_areas')->insert([
            'process_id' => $process_id,
            'area_id' => 7,
        ]);

        $process_id = DB::table('process')->insertGetId([
            'name' => "Совершенствование бизнес-кейса",
            'source_id' => 2,
        ]);

        DB::table('process_groups')->insert([
            'process_id' => $process_id,
            'group_id' => 2,
        ]);

        DB::table('process_areas')->insert([
            'process_id' => $process_id,
            'area_id' => 1,
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
            'area_id' => 7,
        ]);

        $process_id = DB::table('process')->insertGetId([
            'name' => "Разработка плана исключения",
            'source_id' => 2,
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
            'name' => "Назначение исполнительного и проектного менеджера",
            'source_id' => 2,
        ]);

        DB::table('process_groups')->insert([
            'process_id' => $process_id,
            'group_id' => 1,
        ]);

        DB::table('process_areas')->insert([
            'process_id' => $process_id,
            'area_id' => 6,
        ]);

        $process_id = DB::table('process')->insertGetId([
            'name' => "Планирование и назначение команды проекта",
            'source_id' => 2,
        ]);

        DB::table('process_groups')->insert([
            'process_id' => $process_id,
            'group_id' => 1,
        ]);

        DB::table('process_areas')->insert([
            'process_id' => $process_id,
            'area_id' => 6,
        ]);

        $process_id = DB::table('process')->insertGetId([
            'name' => "Подготовка стратегии управления коммуникацией",
            'source_id' => 2,
        ]);

        DB::table('process_groups')->insert([
            'process_id' => $process_id,
            'group_id' => 1,
        ]);

        DB::table('process_areas')->insert([
            'process_id' => $process_id,
            'area_id' => 8,
        ]);

        $process_id = DB::table('process')->insertGetId([
            'name' => "Авторизация пакета работ",
            'source_id' => 2,
        ]);

        DB::table('process_groups')->insert([
            'process_id' => $process_id,
            'group_id' => 2,
        ]);

        DB::table('process_groups')->insert([
            'process_id' => $process_id,
            'group_id' => 3,
        ]);

        DB::table('process_areas')->insert([
            'process_id' => $process_id,
            'area_id' => 2,
        ]);

        DB::table('process_areas')->insert([
            'process_id' => $process_id,
            'area_id' => 1,
        ]);

        $process_id = DB::table('process')->insertGetId([
            'name' => "Подготовка стратегии управления качеством",
            'source_id' => 2,
        ]);

        DB::table('process_groups')->insert([
            'process_id' => $process_id,
            'group_id' => 2,
        ]);

        DB::table('process_areas')->insert([
            'process_id' => $process_id,
            'area_id' => 5,
        ]);

        $process_id = DB::table('process')->insertGetId([
            'name' => "Подготовка стратегии управления риском",
            'source_id' => 2,
        ]);

        DB::table('process_groups')->insert([
            'process_id' => $process_id,
            'group_id' => 2,
        ]);

        DB::table('process_areas')->insert([
            'process_id' => $process_id,
            'area_id' => 7,
        ]);

        $process_id = DB::table('process')->insertGetId([
            'name' => "Фиксация и рассмотрение проблем и рисков",
            'source_id' => 2,
        ]);

        DB::table('process_groups')->insert([
            'process_id' => $process_id,
            'group_id' => 2,
        ]);

        DB::table('process_areas')->insert([
            'process_id' => $process_id,
            'area_id' => 7,
        ]);

        $process_id = DB::table('process')->insertGetId([
            'name' => "Выдача указания для конкретного случая",
            'source_id' => 2,
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
            'name' => "Осуществление корректирующего действия",
            'source_id' => 2,
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
            'name' => "Прием пакета работ",
            'source_id' => 2,
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
            'name' => "Выполнение пакета работ",
            'source_id' => 2,
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
            'name' => "Поставка пакета работ",
            'source_id' => 2,
        ]);

        DB::table('process_groups')->insert([
            'process_id' => $process_id,
            'group_id' => 3,
        ]);

        DB::table('process_areas')->insert([
            'process_id' => $process_id,
            'area_id' => 2,
        ]);

        $process_id = DB::table('process')->insertGetId([
            'name' => "Отчет о ярких местах",
            'source_id' => 2,
        ]);

        DB::table('process_groups')->insert([
            'process_id' => $process_id,
            'group_id' => 3,
        ]);

        DB::table('process_groups')->insert([
            'process_id' => $process_id,
            'group_id' => 8,
        ]);

        DB::table('process_areas')->insert([
            'process_id' => $process_id,
            'area_id' => 10,
        ]);

        DB::table('process_areas')->insert([
            'process_id' => $process_id,
            'area_id' => 1,
        ]);

        $process_id = DB::table('process')->insertGetId([
            'name' => "Обзор состояния пакета работ",
            'source_id' => 2,
        ]);

        DB::table('process_groups')->insert([
            'process_id' => $process_id,
            'group_id' => 8,
        ]);

        DB::table('process_areas')->insert([
            'process_id' => $process_id,
            'area_id' => 1,
        ]);

        $process_id = DB::table('process')->insertGetId([
            'name' => "Отчет об окончании этапа",
            'source_id' => 2,
        ]);

        DB::table('process_groups')->insert([
            'process_id' => $process_id,
            'group_id' => 5,
        ]);

        DB::table('process_areas')->insert([
            'process_id' => $process_id,
            'area_id' => 1,
        ]);

        $process_id = DB::table('process')->insertGetId([
            'name' => "Оценивание проекта",
            'source_id' => 2,
        ]);

        DB::table('process_groups')->insert([
            'process_id' => $process_id,
            'group_id' => 5,
        ]);

        DB::table('process_areas')->insert([
            'process_id' => $process_id,
            'area_id' => 1,
        ]);

        $process_id = DB::table('process')->insertGetId([
            'name' => "Выдача указания для конкретного случая",
            'source_id' => 2,
        ]);

        DB::table('process_groups')->insert([
            'process_id' => $process_id,
            'group_id' => 6,
        ]);

        DB::table('process_areas')->insert([
            'process_id' => $process_id,
            'area_id' => 1,
        ]);

        $process_id = DB::table('process')->insertGetId([
            'name' => "Установка контролей в проекте",
            'source_id' => 2,
        ]);

        DB::table('process_groups')->insert([
            'process_id' => $process_id,
            'group_id' => 6,
        ]);

        DB::table('process_areas')->insert([
            'process_id' => $process_id,
            'area_id' => 1,
        ]);

        $process_id = DB::table('process')->insertGetId([
            'name' => "Обзор состояния этапа",
            'source_id' => 2,
        ]);

        DB::table('process_groups')->insert([
            'process_id' => $process_id,
            'group_id' => 6,
        ]);

        DB::table('process_areas')->insert([
            'process_id' => $process_id,
            'area_id' => 1,
        ]);

        $process_id = DB::table('process')->insertGetId([
            'name' => "Авторизация закрытия проекта",
            'source_id' => 2,
        ]);

        DB::table('process_groups')->insert([
            'process_id' => $process_id,
            'group_id' => 7,
        ]);

        DB::table('process_areas')->insert([
            'process_id' => $process_id,
            'area_id' => 1,
        ]);

        $process_id = DB::table('process')->insertGetId([
            'name' => "Подготовка планового закрытия",
            'source_id' => 2,
        ]);

        DB::table('process_groups')->insert([
            'process_id' => $process_id,
            'group_id' => 7,
        ]);

        DB::table('process_areas')->insert([
            'process_id' => $process_id,
            'area_id' => 1,
        ]);

        $process_id = DB::table('process')->insertGetId([
            'name' => "Подготовка преждевремен-ного закрытия",
            'source_id' => 2,
        ]);

        DB::table('process_groups')->insert([
            'process_id' => $process_id,
            'group_id' => 7,
        ]);

        DB::table('process_areas')->insert([
            'process_id' => $process_id,
            'area_id' => 1,
        ]);

        $process_id = DB::table('process')->insertGetId([
            'name' => "Передача продуктов",
            'source_id' => 2,
        ]);

        DB::table('process_groups')->insert([
            'process_id' => $process_id,
            'group_id' => 7,
        ]);

        DB::table('process_areas')->insert([
            'process_id' => $process_id,
            'area_id' => 1,
        ]);

        $process_id = DB::table('process')->insertGetId([
            'name' => "Рекомендация закрытия проекта",
            'source_id' => 2,
        ]);

        DB::table('process_groups')->insert([
            'process_id' => $process_id,
            'group_id' => 7,
        ]);

        DB::table('process_areas')->insert([
            'process_id' => $process_id,
            'area_id' => 1,
        ]);

        $process_id = DB::table('process')->insertGetId([
            'name' => "Подготовка стратегии управления конфигурацией",
            'source_id' => 2,
        ]);

        DB::table('process_groups')->insert([
            'process_id' => $process_id,
            'group_id' => 2,
        ]);

        DB::table('process_areas')->insert([
            'process_id' => $process_id,
            'area_id' => 2,
        ]);

        $process_id = DB::table('process')->insertGetId([
            'name' => "Прием законченных пакетов работ",
            'source_id' => 2,
        ]);

        DB::table('process_groups')->insert([
            'process_id' => $process_id,
            'group_id' => 4,
        ]);

        DB::table('process_areas')->insert([
            'process_id' => $process_id,
            'area_id' => 2,
        ]);

        $process_id = DB::table('process')->insertGetId([
            'name' => "Подготовка стратегии управления коммуникацией",
            'source_id' => 2,
        ]);

        DB::table('process_groups')->insert([
            'process_id' => $process_id,
            'group_id' => 2,
        ]);

        DB::table('process_areas')->insert([
            'process_id' => $process_id,
            'area_id' => 10,
        ]);

        $process_id = DB::table('process')->insertGetId([
            'name' => "Эскалация проблем и рисков",
            'source_id' => 2,
        ]);

        DB::table('process_groups')->insert([
            'process_id' => $process_id,
            'group_id' => 6,
        ]);

        DB::table('process_areas')->insert([
            'process_id' => $process_id,
            'area_id' => 7,
        ]);

        $process_id = DB::table('process')->insertGetId([
            'name' => "Разработка устава проекта",
            'source_id' => 3,
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
            'name' => "Разработка планов проекта",
            'source_id' => 3,
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
            'name' => "Руководство работы по проекту",
            'source_id' => 3,
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
            'name' => "Контроль работы по проекту",
            'source_id' => 3,
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
            'name' => "Контроль изменений",
            'source_id' => 3,
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
            'name' => "Завершение фазы проекта или проекта",
            'source_id' => 3,
        ]);

        DB::table('process_groups')->insert([
            'process_id' => $process_id,
            'group_id' => 7,
        ]);

        DB::table('process_areas')->insert([
            'process_id' => $process_id,
            'area_id' => 1,
        ]);

        $process_id = DB::table('process')->insertGetId([
            'name' => "Накопление извлеченных уроков",
            'source_id' => 3,
        ]);

        DB::table('process_groups')->insert([
            'process_id' => $process_id,
            'group_id' => 7,
        ]);

        DB::table('process_areas')->insert([
            'process_id' => $process_id,
            'area_id' => 1,
        ]);

        $process_id = DB::table('process')->insertGetId([
            'name' => "Определение содержания",
            'source_id' => 3,
        ]);

        DB::table('process_groups')->insert([
            'process_id' => $process_id,
            'group_id' => 2,
        ]);

        DB::table('process_areas')->insert([
            'process_id' => $process_id,
            'area_id' => 2,
        ]);

        $process_id = DB::table('process')->insertGetId([
            'name' => "Создание иерархической структуры работ",
            'source_id' => 3,
        ]);

        DB::table('process_groups')->insert([
            'process_id' => $process_id,
            'group_id' => 2,
        ]);

        DB::table('process_areas')->insert([
            'process_id' => $process_id,
            'area_id' => 2,
        ]);

        $process_id = DB::table('process')->insertGetId([
            'name' => "Определение операций",
            'source_id' => 3,
        ]);

        DB::table('process_groups')->insert([
            'process_id' => $process_id,
            'group_id' => 2,
        ]);

        DB::table('process_areas')->insert([
            'process_id' => $process_id,
            'area_id' => 2,
        ]);

        $process_id = DB::table('process')->insertGetId([
            'name' => "Контроль содержания",
            'source_id' => 3,
        ]);

        DB::table('process_groups')->insert([
            'process_id' => $process_id,
            'group_id' => 4,
        ]);

        DB::table('process_areas')->insert([
            'process_id' => $process_id,
            'area_id' => 2,
        ]);

        $process_id = DB::table('process')->insertGetId([
            'name' => "Определение последовательности операций",
            'source_id' => 3,
        ]);

        DB::table('process_groups')->insert([
            'process_id' => $process_id,
            'group_id' => 2,
        ]);

        DB::table('process_areas')->insert([
            'process_id' => $process_id,
            'area_id' => 3,
        ]);

        $process_id = DB::table('process')->insertGetId([
            'name' => "Оценка продолжительности операций",
            'source_id' => 3,
        ]);

        DB::table('process_groups')->insert([
            'process_id' => $process_id,
            'group_id' => 2,
        ]);

        DB::table('process_areas')->insert([
            'process_id' => $process_id,
            'area_id' => 3,
        ]);

        $process_id = DB::table('process')->insertGetId([
            'name' => "Разработка расписания",
            'source_id' => 3,
        ]);

        DB::table('process_groups')->insert([
            'process_id' => $process_id,
            'group_id' => 2,
        ]);

        DB::table('process_areas')->insert([
            'process_id' => $process_id,
            'area_id' => 3,
        ]);

        $process_id = DB::table('process')->insertGetId([
            'name' => "Контроль расписания",
            'source_id' => 3,
        ]);

        DB::table('process_groups')->insert([
            'process_id' => $process_id,
            'group_id' => 4,
        ]);

        DB::table('process_areas')->insert([
            'process_id' => $process_id,
            'area_id' => 3,
        ]);

        $process_id = DB::table('process')->insertGetId([
            'name' => "Оценка стоимостей",
            'source_id' => 3,
        ]);

        DB::table('process_groups')->insert([
            'process_id' => $process_id,
            'group_id' => 2,
        ]);

        DB::table('process_areas')->insert([
            'process_id' => $process_id,
            'area_id' => 4,
        ]);

        $process_id = DB::table('process')->insertGetId([
            'name' => "Разработка бюджета",
            'source_id' => 3,
        ]);

        DB::table('process_groups')->insert([
            'process_id' => $process_id,
            'group_id' => 2,
        ]);

        DB::table('process_areas')->insert([
            'process_id' => $process_id,
            'area_id' => 4,
        ]);

        $process_id = DB::table('process')->insertGetId([
            'name' => "Контроль стоимостей",
            'source_id' => 3,
        ]);

        DB::table('process_groups')->insert([
            'process_id' => $process_id,
            'group_id' => 4,
        ]);

        DB::table('process_areas')->insert([
            'process_id' => $process_id,
            'area_id' => 4,
        ]);

        $process_id = DB::table('process')->insertGetId([
            'name' => "Планирование качества",
            'source_id' => 3,
        ]);

        DB::table('process_groups')->insert([
            'process_id' => $process_id,
            'group_id' => 2,
        ]);

        DB::table('process_areas')->insert([
            'process_id' => $process_id,
            'area_id' => 5,
        ]);

        $process_id = DB::table('process')->insertGetId([
            'name' => "Обеспечение качества",
            'source_id' => 3,
        ]);

        DB::table('process_groups')->insert([
            'process_id' => $process_id,
            'group_id' => 3,
        ]);

        DB::table('process_areas')->insert([
            'process_id' => $process_id,
            'area_id' => 5,
        ]);

        $process_id = DB::table('process')->insertGetId([
            'name' => "Контроль качества",
            'source_id' => 3,
        ]);

        DB::table('process_groups')->insert([
            'process_id' => $process_id,
            'group_id' => 4,
        ]);

        DB::table('process_areas')->insert([
            'process_id' => $process_id,
            'area_id' => 5,
        ]);

        $process_id = DB::table('process')->insertGetId([
            'name' => "Создание команды проекта",
            'source_id' => 3,
        ]);

        DB::table('process_groups')->insert([
            'process_id' => $process_id,
            'group_id' => 1,
        ]);

        DB::table('process_areas')->insert([
            'process_id' => $process_id,
            'area_id' => 6,
        ]);

        $process_id = DB::table('process')->insertGetId([
            'name' => "Оценка ресурсов",
            'source_id' => 3,
        ]);

        DB::table('process_groups')->insert([
            'process_id' => $process_id,
            'group_id' => 2,
        ]);

        DB::table('process_areas')->insert([
            'process_id' => $process_id,
            'area_id' => 6,
        ]);

        $process_id = DB::table('process')->insertGetId([
            'name' => "Определение организации проекта",
            'source_id' => 3,
        ]);

        DB::table('process_groups')->insert([
            'process_id' => $process_id,
            'group_id' => 2,
        ]);

        DB::table('process_areas')->insert([
            'process_id' => $process_id,
            'area_id' => 6,
        ]);

        $process_id = DB::table('process')->insertGetId([
            'name' => "Развитие команды проекта",
            'source_id' => 3,
        ]);

        DB::table('process_groups')->insert([
            'process_id' => $process_id,
            'group_id' => 3,
        ]);

        DB::table('process_areas')->insert([
            'process_id' => $process_id,
            'area_id' => 6,
        ]);

        $process_id = DB::table('process')->insertGetId([
            'name' => "Контроль ресурсов",
            'source_id' => 3,
        ]);

        DB::table('process_groups')->insert([
            'process_id' => $process_id,
            'group_id' => 4,
        ]);

        DB::table('process_areas')->insert([
            'process_id' => $process_id,
            'area_id' => 6,
        ]);

        $process_id = DB::table('process')->insertGetId([
            'name' => "Управление командой проекта",
            'source_id' => 3,
        ]);

        DB::table('process_groups')->insert([
            'process_id' => $process_id,
            'group_id' => 8,
        ]);

        DB::table('process_groups')->insert([
            'process_id' => $process_id,
            'group_id' => 4,
        ]);

        DB::table('process_groups')->insert([
            'process_id' => $process_id,
            'group_id' => 5,
        ]);

        DB::table('process_groups')->insert([
            'process_id' => $process_id,
            'group_id' => 6,
        ]);

        DB::table('process_areas')->insert([
            'process_id' => $process_id,
            'area_id' => 6,
        ]);

        $process_id = DB::table('process')->insertGetId([
            'name' => "Планирование коммуникаций",
            'source_id' => 3,
        ]);

        DB::table('process_groups')->insert([
            'process_id' => $process_id,
            'group_id' => 2,
        ]);

        DB::table('process_areas')->insert([
            'process_id' => $process_id,
            'area_id' => 10,
        ]);

        $process_id = DB::table('process')->insertGetId([
            'name' => "Распространение информации",
            'source_id' => 3,
        ]);

        DB::table('process_groups')->insert([
            'process_id' => $process_id,
            'group_id' => 3,
        ]);

        DB::table('process_areas')->insert([
            'process_id' => $process_id,
            'area_id' => 10,
        ]);

        $process_id = DB::table('process')->insertGetId([
            'name' => "Управление коммуникациями",
            'source_id' => 3,
        ]);

        DB::table('process_groups')->insert([
            'process_id' => $process_id,
            'group_id' => 8,
        ]);

        DB::table('process_groups')->insert([
            'process_id' => $process_id,
            'group_id' => 4,
        ]);

        DB::table('process_groups')->insert([
            'process_id' => $process_id,
            'group_id' => 5,
        ]);

        DB::table('process_groups')->insert([
            'process_id' => $process_id,
            'group_id' => 6,
        ]);

        DB::table('process_areas')->insert([
            'process_id' => $process_id,
            'area_id' => 10,
        ]);

        $process_id = DB::table('process')->insertGetId([
            'name' => "Выявление рисков",
            'source_id' => 3,
        ]);

        DB::table('process_groups')->insert([
            'process_id' => $process_id,
            'group_id' => 2,
        ]);

        DB::table('process_areas')->insert([
            'process_id' => $process_id,
            'area_id' => 7,
        ]);

        $process_id = DB::table('process')->insertGetId([
            'name' => "Оценка рисков",
            'source_id' => 3,
        ]);

        DB::table('process_groups')->insert([
            'process_id' => $process_id,
            'group_id' => 2,
        ]);

        DB::table('process_areas')->insert([
            'process_id' => $process_id,
            'area_id' => 7,
        ]);

        $process_id = DB::table('process')->insertGetId([
            'name' => "Работа с рисками",
            'source_id' => 3,
        ]);

        DB::table('process_groups')->insert([
            'process_id' => $process_id,
            'group_id' => 3,
        ]);

        DB::table('process_areas')->insert([
            'process_id' => $process_id,
            'area_id' => 7,
        ]);

        $process_id = DB::table('process')->insertGetId([
            'name' => "Контроль рисков",
            'source_id' => 3,
        ]);

        DB::table('process_groups')->insert([
            'process_id' => $process_id,
            'group_id' => 4,
        ]);

        DB::table('process_areas')->insert([
            'process_id' => $process_id,
            'area_id' => 7,
        ]);

        $process_id = DB::table('process')->insertGetId([
            'name' => "Планирование закупок",
            'source_id' => 3,
        ]);

        DB::table('process_groups')->insert([
            'process_id' => $process_id,
            'group_id' => 2,
        ]);

        DB::table('process_areas')->insert([
            'process_id' => $process_id,
            'area_id' => 9,
        ]);

        $process_id = DB::table('process')->insertGetId([
            'name' => "Выбор поставщиков",
            'source_id' => 3,
        ]);

        DB::table('process_groups')->insert([
            'process_id' => $process_id,
            'group_id' => 3,
        ]);

        DB::table('process_areas')->insert([
            'process_id' => $process_id,
            'area_id' => 9,
        ]);

        $process_id = DB::table('process')->insertGetId([
            'name' => "Администрирование закупок",
            'source_id' => 3,
        ]);

        DB::table('process_groups')->insert([
            'process_id' => $process_id,
            'group_id' => 8,
        ]);

        DB::table('process_groups')->insert([
            'process_id' => $process_id,
            'group_id' => 4,
        ]);

        DB::table('process_groups')->insert([
            'process_id' => $process_id,
            'group_id' => 5,
        ]);

        DB::table('process_groups')->insert([
            'process_id' => $process_id,
            'group_id' => 6,
        ]);

        DB::table('process_areas')->insert([
            'process_id' => $process_id,
            'area_id' => 9,
        ]);

        $process_id = DB::table('process')->insertGetId([
            'name' => "Определение заинтересованных сторон",
            'source_id' => 3,
        ]);

        DB::table('process_groups')->insert([
            'process_id' => $process_id,
            'group_id' => 1,
        ]);

        DB::table('process_areas')->insert([
            'process_id' => $process_id,
            'area_id' => 8,
        ]);

        $process_id = DB::table('process')->insertGetId([
            'name' => "Управление заинтересованными сторонами",
            'source_id' => 3,
        ]);

        DB::table('process_groups')->insert([
            'process_id' => $process_id,
            'group_id' => 3,
        ]);

        DB::table('process_areas')->insert([
            'process_id' => $process_id,
            'area_id' => 8,
        ]);

        $process_id = DB::table('process')->insertGetId([
            'name' => "Разработка устава проекта",
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
            'name' => "Разработка плана управления проектом",
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
            'name' => "Руководство и управление работами проекта",
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
            'name' => "Управление знаниями проекта",
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
            'name' => "Мониторинг и контроль работ проекта",
            'source_id' => 4,
        ]);

        DB::table('process_groups')->insert([
            'process_id' => $process_id,
            'group_id' => 8,
        ]);

        DB::table('process_groups')->insert([
            'process_id' => $process_id,
            'group_id' => 4,
        ]);

        DB::table('process_groups')->insert([
            'process_id' => $process_id,
            'group_id' => 5,
        ]);

        DB::table('process_groups')->insert([
            'process_id' => $process_id,
            'group_id' => 6,
        ]);

        DB::table('process_areas')->insert([
            'process_id' => $process_id,
            'area_id' => 1,
        ]);

        $process_id = DB::table('process')->insertGetId([
            'name' => "Интегрированный контроль изменений",
            'source_id' => 4,
        ]);

        DB::table('process_groups')->insert([
            'process_id' => $process_id,
            'group_id' => 8,
        ]);

        DB::table('process_groups')->insert([
            'process_id' => $process_id,
            'group_id' => 4,
        ]);

        DB::table('process_groups')->insert([
            'process_id' => $process_id,
            'group_id' => 5,
        ]);

        DB::table('process_groups')->insert([
            'process_id' => $process_id,
            'group_id' => 6,
        ]);

        DB::table('process_areas')->insert([
            'process_id' => $process_id,
            'area_id' => 1,
        ]);

        $process_id = DB::table('process')->insertGetId([
            'name' => "Закрытие проекта или фазы",
            'source_id' => 4,
        ]);

        DB::table('process_groups')->insert([
            'process_id' => $process_id,
            'group_id' => 7,
        ]);

        DB::table('process_areas')->insert([
            'process_id' => $process_id,
            'area_id' => 1,
        ]);

        $process_id = DB::table('process')->insertGetId([
            'name' => "Планирование управления содержанием",
            'source_id' => 4,
        ]);

        DB::table('process_groups')->insert([
            'process_id' => $process_id,
            'group_id' => 2,
        ]);

        DB::table('process_areas')->insert([
            'process_id' => $process_id,
            'area_id' => 2,
        ]);

        $process_id = DB::table('process')->insertGetId([
            'name' => "Сбор требований",
            'source_id' => 4,
        ]);

        DB::table('process_groups')->insert([
            'process_id' => $process_id,
            'group_id' => 2,
        ]);

        DB::table('process_areas')->insert([
            'process_id' => $process_id,
            'area_id' => 2,
        ]);

        $process_id = DB::table('process')->insertGetId([
            'name' => "Определение содержания",
            'source_id' => 4,
        ]);

        DB::table('process_groups')->insert([
            'process_id' => $process_id,
            'group_id' => 2,
        ]);

        DB::table('process_areas')->insert([
            'process_id' => $process_id,
            'area_id' => 2,
        ]);

        $process_id = DB::table('process')->insertGetId([
            'name' => "Создание ИСР",
            'source_id' => 4,
        ]);

        DB::table('process_groups')->insert([
            'process_id' => $process_id,
            'group_id' => 2,
        ]);

        DB::table('process_areas')->insert([
            'process_id' => $process_id,
            'area_id' => 2,
        ]);

        $process_id = DB::table('process')->insertGetId([
            'name' => "Подтверждение содержания",
            'source_id' => 4,
        ]);

        DB::table('process_groups')->insert([
            'process_id' => $process_id,
            'group_id' => 6,
        ]);

        DB::table('process_areas')->insert([
            'process_id' => $process_id,
            'area_id' => 2,
        ]);

        $process_id = DB::table('process')->insertGetId([
            'name' => "Контроль содержания",
            'source_id' => 4,
        ]);

        DB::table('process_groups')->insert([
            'process_id' => $process_id,
            'group_id' => 4,
        ]);

        DB::table('process_areas')->insert([
            'process_id' => $process_id,
            'area_id' => 2,
        ]);

        $process_id = DB::table('process')->insertGetId([
            'name' => "Планирование управления расписанием",
            'source_id' => 4,
        ]);

        DB::table('process_groups')->insert([
            'process_id' => $process_id,
            'group_id' => 2,
        ]);

        DB::table('process_areas')->insert([
            'process_id' => $process_id,
            'area_id' => 3,
        ]);

        $process_id = DB::table('process')->insertGetId([
            'name' => "Определение операций",
            'source_id' => 4,
        ]);

        DB::table('process_groups')->insert([
            'process_id' => $process_id,
            'group_id' => 2,
        ]);

        DB::table('process_areas')->insert([
            'process_id' => $process_id,
            'area_id' => 3,
        ]);

        $process_id = DB::table('process')->insertGetId([
            'name' => "Определение последовательности операций",
            'source_id' => 4,
        ]);

        DB::table('process_groups')->insert([
            'process_id' => $process_id,
            'group_id' => 2,
        ]);

        DB::table('process_areas')->insert([
            'process_id' => $process_id,
            'area_id' => 3,
        ]);

        $process_id = DB::table('process')->insertGetId([
            'name' => "Оценка длительности операций",
            'source_id' => 4,
        ]);

        DB::table('process_groups')->insert([
            'process_id' => $process_id,
            'group_id' => 2,
        ]);

        DB::table('process_areas')->insert([
            'process_id' => $process_id,
            'area_id' => 3,
        ]);

        $process_id = DB::table('process')->insertGetId([
            'name' => "Разработка расписания",
            'source_id' => 4,
        ]);

        DB::table('process_groups')->insert([
            'process_id' => $process_id,
            'group_id' => 2,
        ]);

        DB::table('process_areas')->insert([
            'process_id' => $process_id,
            'area_id' => 3,
        ]);

        $process_id = DB::table('process')->insertGetId([
            'name' => "Контроль расписания",
            'source_id' => 4,
        ]);

        DB::table('process_groups')->insert([
            'process_id' => $process_id,
            'group_id' => 4,
        ]);

        DB::table('process_areas')->insert([
            'process_id' => $process_id,
            'area_id' => 3,
        ]);

        $process_id = DB::table('process')->insertGetId([
            'name' => "Планирование управления стоимостью",
            'source_id' => 4,
        ]);

        DB::table('process_groups')->insert([
            'process_id' => $process_id,
            'group_id' => 2,
        ]);

        DB::table('process_areas')->insert([
            'process_id' => $process_id,
            'area_id' => 4,
        ]);

        $process_id = DB::table('process')->insertGetId([
            'name' => "Оценка стоимости",
            'source_id' => 4,
        ]);

        DB::table('process_groups')->insert([
            'process_id' => $process_id,
            'group_id' => 2,
        ]);

        DB::table('process_areas')->insert([
            'process_id' => $process_id,
            'area_id' => 4,
        ]);

        $process_id = DB::table('process')->insertGetId([
            'name' => "Определение бюджета",
            'source_id' => 4,
        ]);

        DB::table('process_groups')->insert([
            'process_id' => $process_id,
            'group_id' => 2,
        ]);

        DB::table('process_areas')->insert([
            'process_id' => $process_id,
            'area_id' => 4,
        ]);

        $process_id = DB::table('process')->insertGetId([
            'name' => "Контроль стоимости",
            'source_id' => 4,
        ]);

        DB::table('process_groups')->insert([
            'process_id' => $process_id,
            'group_id' => 4,
        ]);

        DB::table('process_areas')->insert([
            'process_id' => $process_id,
            'area_id' => 4,
        ]);

        $process_id = DB::table('process')->insertGetId([
            'name' => "Планирование управления качеством",
            'source_id' => 4,
        ]);

        DB::table('process_groups')->insert([
            'process_id' => $process_id,
            'group_id' => 2,
        ]);

        DB::table('process_areas')->insert([
            'process_id' => $process_id,
            'area_id' => 5,
        ]);

        $process_id = DB::table('process')->insertGetId([
            'name' => "Управление качеством",
            'source_id' => 4,
        ]);

        DB::table('process_groups')->insert([
            'process_id' => $process_id,
            'group_id' => 3,
        ]);

        DB::table('process_areas')->insert([
            'process_id' => $process_id,
            'area_id' => 5,
        ]);

        $process_id = DB::table('process')->insertGetId([
            'name' => "Контроль качества",
            'source_id' => 4,
        ]);

        DB::table('process_groups')->insert([
            'process_id' => $process_id,
            'group_id' => 4,
        ]);

        DB::table('process_areas')->insert([
            'process_id' => $process_id,
            'area_id' => 5,
        ]);

        $process_id = DB::table('process')->insertGetId([
            'name' => "Планирование управления ресурсами",
            'source_id' => 4,
        ]);

        DB::table('process_groups')->insert([
            'process_id' => $process_id,
            'group_id' => 2,
        ]);

        DB::table('process_areas')->insert([
            'process_id' => $process_id,
            'area_id' => 6,
        ]);

        $process_id = DB::table('process')->insertGetId([
            'name' => "Оценка ресурсов операций",
            'source_id' => 4,
        ]);

        DB::table('process_groups')->insert([
            'process_id' => $process_id,
            'group_id' => 2,
        ]);

        DB::table('process_areas')->insert([
            'process_id' => $process_id,
            'area_id' => 6,
        ]);

        $process_id = DB::table('process')->insertGetId([
            'name' => "Приобретение ресурсов",
            'source_id' => 4,
        ]);

        DB::table('process_groups')->insert([
            'process_id' => $process_id,
            'group_id' => 3,
        ]);

        DB::table('process_areas')->insert([
            'process_id' => $process_id,
            'area_id' => 6,
        ]);

        $process_id = DB::table('process')->insertGetId([
            'name' => "Развитие команды проекта",
            'source_id' => 4,
        ]);

        DB::table('process_groups')->insert([
            'process_id' => $process_id,
            'group_id' => 3,
        ]);

        DB::table('process_areas')->insert([
            'process_id' => $process_id,
            'area_id' => 6,
        ]);

        $process_id = DB::table('process')->insertGetId([
            'name' => "Управление командой проекта",
            'source_id' => 4,
        ]);

        DB::table('process_groups')->insert([
            'process_id' => $process_id,
            'group_id' => 3,
        ]);

        DB::table('process_areas')->insert([
            'process_id' => $process_id,
            'area_id' => 6,
        ]);

        $process_id = DB::table('process')->insertGetId([
            'name' => "Контроль ресурсов",
            'source_id' => 4,
        ]);

        DB::table('process_groups')->insert([
            'process_id' => $process_id,
            'group_id' => 4,
        ]);

        DB::table('process_areas')->insert([
            'process_id' => $process_id,
            'area_id' => 6,
        ]);

        $process_id = DB::table('process')->insertGetId([
            'name' => "Планирование управления коммуникациями",
            'source_id' => 4,
        ]);

        DB::table('process_groups')->insert([
            'process_id' => $process_id,
            'group_id' => 2,
        ]);

        DB::table('process_areas')->insert([
            'process_id' => $process_id,
            'area_id' => 10,
        ]);

        $process_id = DB::table('process')->insertGetId([
            'name' => "Управление коммуникациями",
            'source_id' => 4,
        ]);

        DB::table('process_groups')->insert([
            'process_id' => $process_id,
            'group_id' => 3,
        ]);

        DB::table('process_areas')->insert([
            'process_id' => $process_id,
            'area_id' => 10,
        ]);

        $process_id = DB::table('process')->insertGetId([
            'name' => "Мониторинг коммуникаций",
            'source_id' => 4,
        ]);

        DB::table('process_groups')->insert([
            'process_id' => $process_id,
            'group_id' => 4,
        ]);

        DB::table('process_groups')->insert([
            'process_id' => $process_id,
            'group_id' => 5,
        ]);

        DB::table('process_areas')->insert([
            'process_id' => $process_id,
            'area_id' => 10,
        ]);

        $process_id = DB::table('process')->insertGetId([
            'name' => "Планирование управления рисками",
            'source_id' => 4,
        ]);

        DB::table('process_groups')->insert([
            'process_id' => $process_id,
            'group_id' => 2,
        ]);

        DB::table('process_areas')->insert([
            'process_id' => $process_id,
            'area_id' => 7,
        ]);

        $process_id = DB::table('process')->insertGetId([
            'name' => "Идентификация рисков",
            'source_id' => 4,
        ]);

        DB::table('process_groups')->insert([
            'process_id' => $process_id,
            'group_id' => 2,
        ]);

        DB::table('process_areas')->insert([
            'process_id' => $process_id,
            'area_id' => 7,
        ]);

        $process_id = DB::table('process')->insertGetId([
            'name' => "Качественный анализ рисков",
            'source_id' => 4,
        ]);

        DB::table('process_groups')->insert([
            'process_id' => $process_id,
            'group_id' => 2,
        ]);

        DB::table('process_areas')->insert([
            'process_id' => $process_id,
            'area_id' => 7,
        ]);

        $process_id = DB::table('process')->insertGetId([
            'name' => "Количественный анализ рисков",
            'source_id' => 4,
        ]);

        DB::table('process_groups')->insert([
            'process_id' => $process_id,
            'group_id' => 2,
        ]);

        DB::table('process_areas')->insert([
            'process_id' => $process_id,
            'area_id' => 7,
        ]);

        $process_id = DB::table('process')->insertGetId([
            'name' => "Планирование реагирования на риски",
            'source_id' => 4,
        ]);

        DB::table('process_groups')->insert([
            'process_id' => $process_id,
            'group_id' => 2,
        ]);

        DB::table('process_areas')->insert([
            'process_id' => $process_id,
            'area_id' => 7,
        ]);

        $process_id = DB::table('process')->insertGetId([
            'name' => "Осуществление реагирования на риски",
            'source_id' => 4,
        ]);

        DB::table('process_groups')->insert([
            'process_id' => $process_id,
            'group_id' => 3,
        ]);

        DB::table('process_areas')->insert([
            'process_id' => $process_id,
            'area_id' => 7,
        ]);

        $process_id = DB::table('process')->insertGetId([
            'name' => "Мониторинг рисков",
            'source_id' => 4,
        ]);

        DB::table('process_groups')->insert([
            'process_id' => $process_id,
            'group_id' => 4,
        ]);

        DB::table('process_groups')->insert([
            'process_id' => $process_id,
            'group_id' => 5,
        ]);

        DB::table('process_areas')->insert([
            'process_id' => $process_id,
            'area_id' => 7,
        ]);

        $process_id = DB::table('process')->insertGetId([
            'name' => "Планирование управления закупками",
            'source_id' => 4,
        ]);

        DB::table('process_groups')->insert([
            'process_id' => $process_id,
            'group_id' => 2,
        ]);

        DB::table('process_areas')->insert([
            'process_id' => $process_id,
            'area_id' => 9,
        ]);

        $process_id = DB::table('process')->insertGetId([
            'name' => "Проведение закупок",
            'source_id' => 4,
        ]);

        DB::table('process_groups')->insert([
            'process_id' => $process_id,
            'group_id' => 3,
        ]);

        DB::table('process_areas')->insert([
            'process_id' => $process_id,
            'area_id' => 9,
        ]);

        $process_id = DB::table('process')->insertGetId([
            'name' => "Контроль закупок",
            'source_id' => 4,
        ]);

        DB::table('process_groups')->insert([
            'process_id' => $process_id,
            'group_id' => 4,
        ]);

        DB::table('process_areas')->insert([
            'process_id' => $process_id,
            'area_id' => 9,
        ]);

        $process_id = DB::table('process')->insertGetId([
            'name' => "Идентификация заинтересованных сторон",
            'source_id' => 4,
        ]);

        DB::table('process_groups')->insert([
            'process_id' => $process_id,
            'group_id' => 1,
        ]);

        DB::table('process_areas')->insert([
            'process_id' => $process_id,
            'area_id' => 8,
        ]);

        $process_id = DB::table('process')->insertGetId([
            'name' => "Планирование вовлечения заинтересованных сторон",
            'source_id' => 4,
        ]);

        DB::table('process_groups')->insert([
            'process_id' => $process_id,
            'group_id' => 2,
        ]);

        DB::table('process_areas')->insert([
            'process_id' => $process_id,
            'area_id' => 8,
        ]);

        $process_id = DB::table('process')->insertGetId([
            'name' => "Управление вовлечением заинтересованных сторон",
            'source_id' => 4,
        ]);

        DB::table('process_groups')->insert([
            'process_id' => $process_id,
            'group_id' => 3,
        ]);

        DB::table('process_areas')->insert([
            'process_id' => $process_id,
            'area_id' => 8,
        ]);

        $process_id = DB::table('process')->insertGetId([
            'name' => "Мониторинг вовлечения заинтересованных сторон",
            'source_id' => 4,
        ]);

        DB::table('process_groups')->insert([
            'process_id' => $process_id,
            'group_id' => 4,
        ]);

        DB::table('process_groups')->insert([
            'process_id' => $process_id,
            'group_id' => 5,
        ]);

        DB::table('process_areas')->insert([
            'process_id' => $process_id,
            'area_id' => 8,
        ]);

        $process_id = DB::table('process')->insertGetId([
            'name' => "Разработка общей модели объекта",
            'source_id' => 5,
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
            'name' => "Уточнение общей модели объекта",
            'source_id' => 5,
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
            'name' => "Написание заметок к модели",
            'source_id' => 5,
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
            'name' => "Внутренняя и внешняя оценка",
            'source_id' => 8,
        ]);

        DB::table('process_groups')->insert([
            'process_id' => $process_id,
            'group_id' => 4,
        ]);

        DB::table('process_groups')->insert([
            'process_id' => $process_id,
            'group_id' => 5,
        ]);

        DB::table('process_groups')->insert([
            'process_id' => $process_id,
            'group_id' => 6,
        ]);

        DB::table('process_areas')->insert([
            'process_id' => $process_id,
            'area_id' => 2,
        ]);

        $process_id = DB::table('process')->insertGetId([
            'name' => "Анализ области",
            'source_id' => 5,
        ]);

        DB::table('process_groups')->insert([
            'process_id' => $process_id,
            'group_id' => 2,
        ]);

        DB::table('process_areas')->insert([
            'process_id' => $process_id,
            'area_id' => 2,
        ]);

        $process_id = DB::table('process')->insertGetId([
            'name' => "Изучение документов",
            'source_id' => 5,
        ]);

        DB::table('process_groups')->insert([
            'process_id' => $process_id,
            'group_id' => 2,
        ]);

        DB::table('process_areas')->insert([
            'process_id' => $process_id,
            'area_id' => 2,
        ]);

        $process_id = DB::table('process')->insertGetId([
            'name' => "Разработка небольших групповых моделей",
            'source_id' => 5,
        ]);

        DB::table('process_groups')->insert([
            'process_id' => $process_id,
            'group_id' => 2,
        ]);

        DB::table('process_areas')->insert([
            'process_id' => $process_id,
            'area_id' => 2,
        ]);

        $process_id = DB::table('process')->insertGetId([
            'name' => "Создание списка свойств",
            'source_id' => 5,
        ]);

        DB::table('process_groups')->insert([
            'process_id' => $process_id,
            'group_id' => 2,
        ]);

        DB::table('process_areas')->insert([
            'process_id' => $process_id,
            'area_id' => 2,
        ]);

        $process_id = DB::table('process')->insertGetId([
            'name' => "Изучение связанных документов",
            'source_id' => 5,
        ]);

        DB::table('process_groups')->insert([
            'process_id' => $process_id,
            'group_id' => 3,
        ]);

        DB::table('process_areas')->insert([
            'process_id' => $process_id,
            'area_id' => 2,
        ]);

        $process_id = DB::table('process')->insertGetId([
            'name' => "Разработка диаграмм(ы) последовательности",
            'source_id' => 5,
        ]);

        DB::table('process_groups')->insert([
            'process_id' => $process_id,
            'group_id' => 3,
        ]);

        DB::table('process_areas')->insert([
            'process_id' => $process_id,
            'area_id' => 2,
        ]);

        $process_id = DB::table('process')->insertGetId([
            'name' => "Написание начальных данных для классов и методов",
            'source_id' => 5,
        ]);

        DB::table('process_groups')->insert([
            'process_id' => $process_id,
            'group_id' => 3,
        ]);

        DB::table('process_areas')->insert([
            'process_id' => $process_id,
            'area_id' => 2,
        ]);

        $process_id = DB::table('process')->insertGetId([
            'name' => "Реализация классов и методов",
            'source_id' => 5,
        ]);

        DB::table('process_groups')->insert([
            'process_id' => $process_id,
            'group_id' => 3,
        ]);

        DB::table('process_areas')->insert([
            'process_id' => $process_id,
            'area_id' => 2,
        ]);

        $process_id = DB::table('process')->insertGetId([
            'name' => "Проверка дизайна",
            'source_id' => 5,
        ]);

        DB::table('process_groups')->insert([
            'process_id' => $process_id,
            'group_id' => 8,
        ]);

        DB::table('process_groups')->insert([
            'process_id' => $process_id,
            'group_id' => 4,
        ]);

        DB::table('process_groups')->insert([
            'process_id' => $process_id,
            'group_id' => 5,
        ]);

        DB::table('process_groups')->insert([
            'process_id' => $process_id,
            'group_id' => 6,
        ]);

        DB::table('process_areas')->insert([
            'process_id' => $process_id,
            'area_id' => 2,
        ]);

        $process_id = DB::table('process')->insertGetId([
            'name' => "Проверка кода и выполнение модульного теста",
            'source_id' => 5,
        ]);

        DB::table('process_groups')->insert([
            'process_id' => $process_id,
            'group_id' => 8,
        ]);

        DB::table('process_groups')->insert([
            'process_id' => $process_id,
            'group_id' => 4,
        ]);

        DB::table('process_groups')->insert([
            'process_id' => $process_id,
            'group_id' => 5,
        ]);

        DB::table('process_groups')->insert([
            'process_id' => $process_id,
            'group_id' => 6,
        ]);

        DB::table('process_areas')->insert([
            'process_id' => $process_id,
            'area_id' => 2,
        ]);

        $process_id = DB::table('process')->insertGetId([
            'name' => "Определение последовательности развития",
            'source_id' => 5,
        ]);

        DB::table('process_groups')->insert([
            'process_id' => $process_id,
            'group_id' => 2,
        ]);

        DB::table('process_areas')->insert([
            'process_id' => $process_id,
            'area_id' => 3,
        ]);

        $process_id = DB::table('process')->insertGetId([
            'name' => "Назначение бизнес-деятельности главным разработчиками",
            'source_id' => 5,
        ]);

        DB::table('process_groups')->insert([
            'process_id' => $process_id,
            'group_id' => 2,
        ]);

        DB::table('process_areas')->insert([
            'process_id' => $process_id,
            'area_id' => 3,
        ]);

        $process_id = DB::table('process')->insertGetId([
            'name' => "Самооценивание ",
            'source_id' => 5,
        ]);

        DB::table('process_groups')->insert([
            'process_id' => $process_id,
            'group_id' => 8,
        ]);

        DB::table('process_groups')->insert([
            'process_id' => $process_id,
            'group_id' => 4,
        ]);

        DB::table('process_groups')->insert([
            'process_id' => $process_id,
            'group_id' => 5,
        ]);

        DB::table('process_groups')->insert([
            'process_id' => $process_id,
            'group_id' => 6,
        ]);

        DB::table('process_areas')->insert([
            'process_id' => $process_id,
            'area_id' => 3,
        ]);

        $process_id = DB::table('process')->insertGetId([
            'name' => "Выбор экспертов области, главных программистов и главного архитектора проекта",
            'source_id' => 5,
        ]);

        DB::table('process_groups')->insert([
            'process_id' => $process_id,
            'group_id' => 1,
        ]);

        DB::table('process_areas')->insert([
            'process_id' => $process_id,
            'area_id' => 6,
        ]);

        $process_id = DB::table('process')->insertGetId([
            'name' => "Формирование команды объекта",
            'source_id' => 5,
        ]);

        DB::table('process_groups')->insert([
            'process_id' => $process_id,
            'group_id' => 1,
        ]);

        DB::table('process_areas')->insert([
            'process_id' => $process_id,
            'area_id' => 6,
        ]);

        $process_id = DB::table('process')->insertGetId([
            'name' => "Формирование команды для формирования списка свойств",
            'source_id' => 5,
        ]);

        DB::table('process_groups')->insert([
            'process_id' => $process_id,
            'group_id' => 2,
        ]);

        DB::table('process_areas')->insert([
            'process_id' => $process_id,
            'area_id' => 6,
        ]);

        $process_id = DB::table('process')->insertGetId([
            'name' => "Формирование команды для планирования",
            'source_id' => 5,
        ]);

        DB::table('process_groups')->insert([
            'process_id' => $process_id,
            'group_id' => 2,
        ]);

        DB::table('process_areas')->insert([
            'process_id' => $process_id,
            'area_id' => 6,
        ]);

        $process_id = DB::table('process')->insertGetId([
            'name' => "Формирование команды по реализации свойств",
            'source_id' => 5,
        ]);

        DB::table('process_groups')->insert([
            'process_id' => $process_id,
            'group_id' => 3,
        ]);

        DB::table('process_areas')->insert([
            'process_id' => $process_id,
            'area_id' => 6,
        ]);

        $process_id = DB::table('process')->insertGetId([
            'name' => "Создать видение проекта",
            'source_id' => 6,
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
            'name' => "Проводить планирование выпуска",
            'source_id' => 6,
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
            'name' => "Создать поставки",
            'source_id' => 6,
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
            'name' => "Осуществлять ретроспективу спринта",
            'source_id' => 6,
        ]);

        DB::table('process_groups')->insert([
            'process_id' => $process_id,
            'group_id' => 7,
        ]);

        DB::table('process_areas')->insert([
            'process_id' => $process_id,
            'area_id' => 1,
        ]);

        $process_id = DB::table('process')->insertGetId([
            'name' => "Отправлять поставки",
            'source_id' => 6,
        ]);

        DB::table('process_groups')->insert([
            'process_id' => $process_id,
            'group_id' => 7,
        ]);

        DB::table('process_areas')->insert([
            'process_id' => $process_id,
            'area_id' => 1,
        ]);

        $process_id = DB::table('process')->insertGetId([
            'name' => "Осуществлять ретроспективу проекта",
            'source_id' => 6,
        ]);

        DB::table('process_groups')->insert([
            'process_id' => $process_id,
            'group_id' => 7,
        ]);

        DB::table('process_areas')->insert([
            'process_id' => $process_id,
            'area_id' => 1,
        ]);

        $process_id = DB::table('process')->insertGetId([
            'name' => "Создать Epic(s)",
            'source_id' => 6,
        ]);

        DB::table('process_groups')->insert([
            'process_id' => $process_id,
            'group_id' => 1,
        ]);


        DB::table('process_areas')->insert([
            'process_id' => $process_id,
            'area_id' => 2,
        ]);

        DB::table('process_areas')->insert([
            'process_id' => $process_id,
            'area_id' => 7,
        ]);

        $process_id = DB::table('process')->insertGetId([
            'name' => "Создать приоритезированный Беклог продукта",
            'source_id' => 6,
        ]);

        DB::table('process_groups')->insert([
            'process_id' => $process_id,
            'group_id' => 2,
        ]);

        DB::table('process_areas')->insert([
            'process_id' => $process_id,
            'area_id' => 2,
        ]);

        $process_id = DB::table('process')->insertGetId([
            'name' => "Создать пользовательские истории",
            'source_id' => 6,
        ]);

        DB::table('process_groups')->insert([
            'process_id' => $process_id,
            'group_id' => 2,
        ]);

        DB::table('process_areas')->insert([
            'process_id' => $process_id,
            'area_id' => 2,
        ]);

        $process_id = DB::table('process')->insertGetId([
            'name' => "Утвердить, оценить и принять обязательство по пользовательским историям",
            'source_id' => 6,
        ]);

        DB::table('process_groups')->insert([
            'process_id' => $process_id,
            'group_id' => 2,
        ]);

        DB::table('process_areas')->insert([
            'process_id' => $process_id,
            'area_id' => 2,
        ]);

        $process_id = DB::table('process')->insertGetId([
            'name' => "Создать задачи",
            'source_id' => 6,
        ]);

        DB::table('process_groups')->insert([
            'process_id' => $process_id,
            'group_id' => 2,
        ]);

        DB::table('process_areas')->insert([
            'process_id' => $process_id,
            'area_id' => 2,
        ]);

        $process_id = DB::table('process')->insertGetId([
            'name' => "Создать Беклог Спринта",
            'source_id' => 6,
        ]);

        DB::table('process_groups')->insert([
            'process_id' => $process_id,
            'group_id' => 2,
        ]);

        DB::table('process_areas')->insert([
            'process_id' => $process_id,
            'area_id' => 2,
        ]);

        $process_id = DB::table('process')->insertGetId([
            'name' => "Ухаживать за приоритезированным Беклог продукта",
            'source_id' => 6,
        ]);

        DB::table('process_groups')->insert([
            'process_id' => $process_id,
            'group_id' => 3,
        ]);

        DB::table('process_areas')->insert([
            'process_id' => $process_id,
            'area_id' => 2,
        ]);

        $process_id = DB::table('process')->insertGetId([
            'name' => "Демонстрировать и утверждать спринт",
            'source_id' => 6,
        ]);

        DB::table('process_groups')->insert([
            'process_id' => $process_id,
            'group_id' => 8,
        ]);

        DB::table('process_groups')->insert([
            'process_id' => $process_id,
            'group_id' => 4,
        ]);

        DB::table('process_groups')->insert([
            'process_id' => $process_id,
            'group_id' => 5,
        ]);

        DB::table('process_groups')->insert([
            'process_id' => $process_id,
            'group_id' => 6,
        ]);

        DB::table('process_areas')->insert([
            'process_id' => $process_id,
            'area_id' => 2,
        ]);

        DB::table('process_areas')->insert([
            'process_id' => $process_id,
            'area_id' => 5,
        ]);

        $process_id = DB::table('process')->insertGetId([
            'name' => "Оценить задачи",
            'source_id' => 6,
        ]);

        DB::table('process_groups')->insert([
            'process_id' => $process_id,
            'group_id' => 2,
        ]);

        DB::table('process_areas')->insert([
            'process_id' => $process_id,
            'area_id' => 3,
        ]);

        $process_id = DB::table('process')->insertGetId([
            'name' => "Определить Scrum мастера и заинтересованные стороны",
            'source_id' => 6,
        ]);

        DB::table('process_groups')->insert([
            'process_id' => $process_id,
            'group_id' => 1,
        ]);

        DB::table('process_areas')->insert([
            'process_id' => $process_id,
            'area_id' => 6,
        ]);

        DB::table('process_areas')->insert([
            'process_id' => $process_id,
            'area_id' => 8,
        ]);

        $process_id = DB::table('process')->insertGetId([
            'name' => "Сформировать Scrum команду",
            'source_id' => 6,
        ]);

        DB::table('process_groups')->insert([
            'process_id' => $process_id,
            'group_id' => 1,
        ]);

        DB::table('process_areas')->insert([
            'process_id' => $process_id,
            'area_id' => 6,
        ]);

        $process_id = DB::table('process')->insertGetId([
            'name' => "Проводить ежедневные встречи",
            'source_id' => 6,
        ]);

        DB::table('process_groups')->insert([
            'process_id' => $process_id,
            'group_id' => 3,
        ]);

        DB::table('process_areas')->insert([
            'process_id' => $process_id,
            'area_id' => 10,
        ]);

        $process_id = DB::table('process')->insertGetId([
            'name' => "Созывать Scrum of Scrums",
            'source_id' => 6,
        ]);

        DB::table('process_groups')->insert([
            'process_id' => $process_id,
            'group_id' => 3,
        ]);

        DB::table('process_areas')->insert([
            'process_id' => $process_id,
            'area_id' => 10,
        ]);

        $process_id = DB::table('process')->insertGetId([
            'name' => "Интеграция планов проекта",
            'source_id' => 7,
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
            'name' => "Учет и прогнозирование выполнения плана управления проектом",
            'source_id' => 7,
        ]);

        DB::table('process_groups')->insert([
            'process_id' => $process_id,
            'group_id' => 8,
        ]);

        DB::table('process_areas')->insert([
            'process_id' => $process_id,
            'area_id' => 1,
        ]);

        $process_id = DB::table('process')->insertGetId([
            'name' => "Учет выполнения всей совокупности планов проекта",
            'source_id' => 7,
        ]);

        DB::table('process_groups')->insert([
            'process_id' => $process_id,
            'group_id' => 8,
        ]);

        DB::table('process_areas')->insert([
            'process_id' => $process_id,
            'area_id' => 1,
        ]);

        $process_id = DB::table('process')->insertGetId([
            'name' => "Контроль выполнения плана управления проектом",
            'source_id' => 7,
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
            'name' => "Контроль выполнения всей совокупности планов проекта",
            'source_id' => 7,
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
            'name' => "Анализ выполнения плана управления проектом",
            'source_id' => 7,
        ]);

        DB::table('process_groups')->insert([
            'process_id' => $process_id,
            'group_id' => 5,
        ]);

        DB::table('process_areas')->insert([
            'process_id' => $process_id,
            'area_id' => 1,
        ]);

        $process_id = DB::table('process')->insertGetId([
            'name' => "Анализ выполнения всей совокупности планов проекта",
            'source_id' => 7,
        ]);

        DB::table('process_groups')->insert([
            'process_id' => $process_id,
            'group_id' => 5,
        ]);

        DB::table('process_areas')->insert([
            'process_id' => $process_id,
            'area_id' => 1,
        ]);

        $process_id = DB::table('process')->insertGetId([
            'name' => "Принятие решений о выполнении плана управления проектом",
            'source_id' => 7,
        ]);

        DB::table('process_groups')->insert([
            'process_id' => $process_id,
            'group_id' => 6,
        ]);

        DB::table('process_areas')->insert([
            'process_id' => $process_id,
            'area_id' => 1,
        ]);

        $process_id = DB::table('process')->insertGetId([
            'name' => "Принятие решений о выполнении всей совокупности планов проекта",
            'source_id' => 7,
        ]);

        DB::table('process_groups')->insert([
            'process_id' => $process_id,
            'group_id' => 6,
        ]);

        DB::table('process_areas')->insert([
            'process_id' => $process_id,
            'area_id' => 1,
        ]);

        $process_id = DB::table('process')->insertGetId([
            'name' => "Оптимизация содержания проекта",
            'source_id' => 7,
        ]);

        DB::table('process_groups')->insert([
            'process_id' => $process_id,
            'group_id' => 2,
        ]);

        DB::table('process_areas')->insert([
            'process_id' => $process_id,
            'area_id' => 2,
        ]);

        $process_id = DB::table('process')->insertGetId([
            'name' => "Учет и прогнозирование выполнения содержания проекта",
            'source_id' => 7,
        ]);

        DB::table('process_groups')->insert([
            'process_id' => $process_id,
            'group_id' => 8,
        ]);

        DB::table('process_areas')->insert([
            'process_id' => $process_id,
            'area_id' => 2,
        ]);

        $process_id = DB::table('process')->insertGetId([
            'name' => "Анализ содержания",
            'source_id' => 7,
        ]);

        DB::table('process_groups')->insert([
            'process_id' => $process_id,
            'group_id' => 5,
        ]);

        DB::table('process_areas')->insert([
            'process_id' => $process_id,
            'area_id' => 2,
        ]);

        $process_id = DB::table('process')->insertGetId([
            'name' => "Принятие решений о содержании проекта",
            'source_id' => 7,
        ]);

        DB::table('process_groups')->insert([
            'process_id' => $process_id,
            'group_id' => 6,
        ]);

        DB::table('process_areas')->insert([
            'process_id' => $process_id,
            'area_id' => 2,
        ]);

        $process_id = DB::table('process')->insertGetId([
            'name' => "Выполнение расписания",
            'source_id' => 7,
        ]);

        DB::table('process_groups')->insert([
            'process_id' => $process_id,
            'group_id' => 3,
        ]);

        DB::table('process_areas')->insert([
            'process_id' => $process_id,
            'area_id' => 3,
        ]);

        $process_id = DB::table('process')->insertGetId([
            'name' => "Учет и прогнозирование выполнения расписания",
            'source_id' => 7,
        ]);

        DB::table('process_groups')->insert([
            'process_id' => $process_id,
            'group_id' => 8,
        ]);

        DB::table('process_areas')->insert([
            'process_id' => $process_id,
            'area_id' => 3,
        ]);

        $process_id = DB::table('process')->insertGetId([
            'name' => "Контроль выполнения расписания",
            'source_id' => 7,
        ]);

        DB::table('process_groups')->insert([
            'process_id' => $process_id,
            'group_id' => 4,
        ]);

        DB::table('process_areas')->insert([
            'process_id' => $process_id,
            'area_id' => 3,
        ]);

        $process_id = DB::table('process')->insertGetId([
            'name' => "Анализ выполнения расписания",
            'source_id' => 7,
        ]);

        DB::table('process_groups')->insert([
            'process_id' => $process_id,
            'group_id' => 5,
        ]);

        DB::table('process_areas')->insert([
            'process_id' => $process_id,
            'area_id' => 3,
        ]);

        $process_id = DB::table('process')->insertGetId([
            'name' => "Принятие решений о выполнении расписания",
            'source_id' => 7,
        ]);

        DB::table('process_groups')->insert([
            'process_id' => $process_id,
            'group_id' => 6,
        ]);

        DB::table('process_areas')->insert([
            'process_id' => $process_id,
            'area_id' => 3,
        ]);

        $process_id = DB::table('process')->insertGetId([
            'name' => "Выполнение бюджета",
            'source_id' => 7,
        ]);

        DB::table('process_groups')->insert([
            'process_id' => $process_id,
            'group_id' => 3,
        ]);

        DB::table('process_areas')->insert([
            'process_id' => $process_id,
            'area_id' => 4,
        ]);

        $process_id = DB::table('process')->insertGetId([
            'name' => "Учет и прогнозирование выполнения бюджета",
            'source_id' => 7,
        ]);

        DB::table('process_groups')->insert([
            'process_id' => $process_id,
            'group_id' => 8,
        ]);

        DB::table('process_areas')->insert([
            'process_id' => $process_id,
            'area_id' => 4,
        ]);

        $process_id = DB::table('process')->insertGetId([
            'name' => "Контроль выполнения бюджета",
            'source_id' => 7,
        ]);

        DB::table('process_groups')->insert([
            'process_id' => $process_id,
            'group_id' => 4,
        ]);

        DB::table('process_areas')->insert([
            'process_id' => $process_id,
            'area_id' => 4,
        ]);

        $process_id = DB::table('process')->insertGetId([
            'name' => "Анализ выполнения бюджета",
            'source_id' => 7,
        ]);

        DB::table('process_groups')->insert([
            'process_id' => $process_id,
            'group_id' => 5,
        ]);

        DB::table('process_areas')->insert([
            'process_id' => $process_id,
            'area_id' => 4,
        ]);

        $process_id = DB::table('process')->insertGetId([
            'name' => "Принятие решения о выполнении бюджета",
            'source_id' => 7,
        ]);

        DB::table('process_groups')->insert([
            'process_id' => $process_id,
            'group_id' => 6,
        ]);

        DB::table('process_areas')->insert([
            'process_id' => $process_id,
            'area_id' => 4,
        ]);

        $process_id = DB::table('process')->insertGetId([
            'name' => "Учет и прогнозирование выполнения плана по управлению качеством",
            'source_id' => 7,
        ]);

        DB::table('process_groups')->insert([
            'process_id' => $process_id,
            'group_id' => 8,
        ]);

        DB::table('process_areas')->insert([
            'process_id' => $process_id,
            'area_id' => 5,
        ]);

        $process_id = DB::table('process')->insertGetId([
            'name' => "Контроль выполнения плана по управлению качеством",
            'source_id' => 7,
        ]);

        DB::table('process_groups')->insert([
            'process_id' => $process_id,
            'group_id' => 4,
        ]);

        DB::table('process_areas')->insert([
            'process_id' => $process_id,
            'area_id' => 5,
        ]);

        $process_id = DB::table('process')->insertGetId([
            'name' => "Анализ выполнения плана по управлению качеством",
            'source_id' => 7,
        ]);

        DB::table('process_groups')->insert([
            'process_id' => $process_id,
            'group_id' => 5,
        ]);

        DB::table('process_areas')->insert([
            'process_id' => $process_id,
            'area_id' => 5,
        ]);

        $process_id = DB::table('process')->insertGetId([
            'name' => "Принятие решений о выполнении плана по управлению качеством",
            'source_id' => 7,
        ]);

        DB::table('process_groups')->insert([
            'process_id' => $process_id,
            'group_id' => 6,
        ]);

        DB::table('process_areas')->insert([
            'process_id' => $process_id,
            'area_id' => 5,
        ]);

        $process_id = DB::table('process')->insertGetId([
            'name' => "Определение ответственности за продукт (может лежать на проектном менеджере или на команде проекта в целом)",
            'source_id' => 7,
        ]);

        DB::table('process_groups')->insert([
            'process_id' => $process_id,
            'group_id' => 2,
        ]);

        DB::table('process_areas')->insert([
            'process_id' => $process_id,
            'area_id' => 6,
        ]);

        $process_id = DB::table('process')->insertGetId([
            'name' => "Учет и прогнозирование выполнения плана по управлению человеческими ресурсами",
            'source_id' => 7,
        ]);

        DB::table('process_groups')->insert([
            'process_id' => $process_id,
            'group_id' => 8,
        ]);

        DB::table('process_areas')->insert([
            'process_id' => $process_id,
            'area_id' => 6,
        ]);

        $process_id = DB::table('process')->insertGetId([
            'name' => "Контроль выполнения плана по управлению человеческими ресурсами",
            'source_id' => 7,
        ]);

        DB::table('process_groups')->insert([
            'process_id' => $process_id,
            'group_id' => 4,
        ]);

        DB::table('process_areas')->insert([
            'process_id' => $process_id,
            'area_id' => 6,
        ]);

        $process_id = DB::table('process')->insertGetId([
            'name' => "Анализ выполнения плана по управлению человеческими ресурсами",
            'source_id' => 7,
        ]);

        DB::table('process_groups')->insert([
            'process_id' => $process_id,
            'group_id' => 5,
        ]);

        DB::table('process_areas')->insert([
            'process_id' => $process_id,
            'area_id' => 6,
        ]);

        $process_id = DB::table('process')->insertGetId([
            'name' => "Принятие решений о выполнения плана по управлению человеческими ресурсами",
            'source_id' => 7,
        ]);

        DB::table('process_groups')->insert([
            'process_id' => $process_id,
            'group_id' => 6,
        ]);

        DB::table('process_areas')->insert([
            'process_id' => $process_id,
            'area_id' => 6,
        ]);

        $process_id = DB::table('process')->insertGetId([
            'name' => "Выполнение плана по коммуникациям",
            'source_id' => 7,
        ]);

        DB::table('process_groups')->insert([
            'process_id' => $process_id,
            'group_id' => 3,
        ]);

        DB::table('process_areas')->insert([
            'process_id' => $process_id,
            'area_id' => 10,
        ]);

        $process_id = DB::table('process')->insertGetId([
            'name' => "Учет и прогнозирование выполнения плана по коммуникациям",
            'source_id' => 7,
        ]);

        DB::table('process_groups')->insert([
            'process_id' => $process_id,
            'group_id' => 8,
        ]);

        DB::table('process_areas')->insert([
            'process_id' => $process_id,
            'area_id' => 10,
        ]);

        $process_id = DB::table('process')->insertGetId([
            'name' => "Контроль выполнения плана по коммуникациям",
            'source_id' => 7,
        ]);

        DB::table('process_groups')->insert([
            'process_id' => $process_id,
            'group_id' => 4,
        ]);

        DB::table('process_areas')->insert([
            'process_id' => $process_id,
            'area_id' => 10,
        ]);

        $process_id = DB::table('process')->insertGetId([
            'name' => "Анализ выполнения плана по коммуникациям",
            'source_id' => 7,
        ]);

        DB::table('process_groups')->insert([
            'process_id' => $process_id,
            'group_id' => 5,
        ]);

        DB::table('process_areas')->insert([
            'process_id' => $process_id,
            'area_id' => 10,
        ]);

        $process_id = DB::table('process')->insertGetId([
            'name' => "Принятие решений о выполнении плана по коммуникациям",
            'source_id' => 7,
        ]);

        DB::table('process_groups')->insert([
            'process_id' => $process_id,
            'group_id' => 6,
        ]);

        DB::table('process_areas')->insert([
            'process_id' => $process_id,
            'area_id' => 10,
        ]);

        $process_id = DB::table('process')->insertGetId([
            'name' => "Осуществление плана управления рисками",
            'source_id' => 7,
        ]);

        DB::table('process_groups')->insert([
            'process_id' => $process_id,
            'group_id' => 3,
        ]);

        DB::table('process_areas')->insert([
            'process_id' => $process_id,
            'area_id' => 7,
        ]);

        $process_id = DB::table('process')->insertGetId([
            'name' => "Учет и прогнозирование выполнения плана управления рисками",
            'source_id' => 7,
        ]);

        DB::table('process_groups')->insert([
            'process_id' => $process_id,
            'group_id' => 8,
        ]);

        DB::table('process_areas')->insert([
            'process_id' => $process_id,
            'area_id' => 7,
        ]);

        $process_id = DB::table('process')->insertGetId([
            'name' => "Контроль выполнения плана управления рисками",
            'source_id' => 7,
        ]);

        DB::table('process_groups')->insert([
            'process_id' => $process_id,
            'group_id' => 4,
        ]);

        DB::table('process_areas')->insert([
            'process_id' => $process_id,
            'area_id' => 7,
        ]);

        $process_id = DB::table('process')->insertGetId([
            'name' => "Анализ выполнения плана управления рисками",
            'source_id' => 7,
        ]);

        DB::table('process_groups')->insert([
            'process_id' => $process_id,
            'group_id' => 5,
        ]);

        DB::table('process_areas')->insert([
            'process_id' => $process_id,
            'area_id' => 7,
        ]);

        $process_id = DB::table('process')->insertGetId([
            'name' => "Анализ рисков",
            'source_id' => 7,
        ]);

        DB::table('process_groups')->insert([
            'process_id' => $process_id,
            'group_id' => 5,
        ]);

        DB::table('process_areas')->insert([
            'process_id' => $process_id,
            'area_id' => 7,
        ]);

        $process_id = DB::table('process')->insertGetId([
            'name' => "Принятие решений о выполнении плана управления рисками",
            'source_id' => 7,
        ]);

        DB::table('process_groups')->insert([
            'process_id' => $process_id,
            'group_id' => 6,
        ]);

        DB::table('process_areas')->insert([
            'process_id' => $process_id,
            'area_id' => 7,
        ]);

        $process_id = DB::table('process')->insertGetId([
            'name' => "Учет и прогнозирование выполнения плана по закупкам",
            'source_id' => 7,
        ]);

        DB::table('process_groups')->insert([
            'process_id' => $process_id,
            'group_id' => 8,
        ]);

        DB::table('process_areas')->insert([
            'process_id' => $process_id,
            'area_id' => 9,
        ]);

        $process_id = DB::table('process')->insertGetId([
            'name' => "Контроль выполнения плана по закупкам",
            'source_id' => 7,
        ]);

        DB::table('process_groups')->insert([
            'process_id' => $process_id,
            'group_id' => 4,
        ]);

        DB::table('process_areas')->insert([
            'process_id' => $process_id,
            'area_id' => 9,
        ]);

        $process_id = DB::table('process')->insertGetId([
            'name' => "Анализ выполнения плана по закупкам",
            'source_id' => 7,
        ]);

        DB::table('process_groups')->insert([
            'process_id' => $process_id,
            'group_id' => 5,
        ]);

        DB::table('process_areas')->insert([
            'process_id' => $process_id,
            'area_id' => 9,
        ]);

        $process_id = DB::table('process')->insertGetId([
            'name' => "Принятие решений о выполнении плана по закупкам",
            'source_id' => 7,
        ]);

        DB::table('process_groups')->insert([
            'process_id' => $process_id,
            'group_id' => 6,
        ]);

        DB::table('process_areas')->insert([
            'process_id' => $process_id,
            'area_id' => 9,
        ]);

        $process_id = DB::table('process')->insertGetId([
            'name' => "Учет и прогнозирование выполнения плана по управлению заинтересованными сторонами",
            'source_id' => 7,
        ]);

        DB::table('process_groups')->insert([
            'process_id' => $process_id,
            'group_id' => 8,
        ]);

        DB::table('process_areas')->insert([
            'process_id' => $process_id,
            'area_id' => 8,
        ]);

        $process_id = DB::table('process')->insertGetId([
            'name' => "Контроль выполнения плана по управлению заинтересован¬ными сторонами",
            'source_id' => 7,
        ]);

        DB::table('process_groups')->insert([
            'process_id' => $process_id,
            'group_id' => 4,
        ]);

        DB::table('process_areas')->insert([
            'process_id' => $process_id,
            'area_id' => 8,
        ]);

        $process_id = DB::table('process')->insertGetId([
            'name' => "Анализ выполнения плана по управлению заинтересован-ными сторонами",
            'source_id' => 7,
        ]);

        DB::table('process_groups')->insert([
            'process_id' => $process_id,
            'group_id' => 5,
        ]);

        DB::table('process_areas')->insert([
            'process_id' => $process_id,
            'area_id' => 8,
        ]);

        $process_id = DB::table('process')->insertGetId([
            'name' => "Принятие решений о выполнении плана по управлению заинтересованными сторонами",
            'source_id' => 7,
        ]);

        DB::table('process_groups')->insert([
            'process_id' => $process_id,
            'group_id' => 6,
        ]);

        DB::table('process_areas')->insert([
            'process_id' => $process_id,
            'area_id' => 8,
        ]);

        $process_id = DB::table('process')->insertGetId([
            'name' => "Разработка технического задания",
            'source_id' => 8,
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
            'name' => "Подготовка базовых полжений бизнес-кейса",
            'source_id' => 8,
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
            'name' => "Оценка осуществимости",
            'source_id' => 8,
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
            'name' => "Создание бизнес-кейса",
            'source_id' => 8,
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
            'name' => "Определение подхода к управлению",
            'source_id' => 8,
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
            'name' => "Создание развивающегося решения",
            'source_id' => 8,
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
            'name' => "Оценка выгод",
            'source_id' => 8,
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
            'name' => "Обзор бизнес-кейса",
            'source_id' => 8,
        ]);

        DB::table('process_groups')->insert([
            'process_id' => $process_id,
            'group_id' => 5,
        ]);

        DB::table('process_areas')->insert([
            'process_id' => $process_id,
            'area_id' => 1,
        ]);

        $process_id = DB::table('process')->insertGetId([
            'name' => "Подготовка отчета по обзору Timebox-а",
            'source_id' => 8,
        ]);

        DB::table('process_groups')->insert([
            'process_id' => $process_id,
            'group_id' => 5,
        ]);

        DB::table('process_areas')->insert([
            'process_id' => $process_id,
            'area_id' => 1,
        ]);

        $process_id = DB::table('process')->insertGetId([
            'name' => "Подготовка отчета по обзору проекта",
            'source_id' => 8,
        ]);

        DB::table('process_groups')->insert([
            'process_id' => $process_id,
            'group_id' => 5,
        ]);

        DB::table('process_areas')->insert([
            'process_id' => $process_id,
            'area_id' => 1,
        ]);

        $process_id = DB::table('process')->insertGetId([
            'name' => "Подготовка приоритезированного списка требований",
            'source_id' => 8,
        ]);

        DB::table('process_groups')->insert([
            'process_id' => $process_id,
            'group_id' => 2,
        ]);

        DB::table('process_areas')->insert([
            'process_id' => $process_id,
            'area_id' => 2,
        ]);

        $process_id = DB::table('process')->insertGetId([
            'name' => "Определение архитектуры решения",
            'source_id' => 8,
        ]);

        DB::table('process_groups')->insert([
            'process_id' => $process_id,
            'group_id' => 2,
        ]);

        DB::table('process_areas')->insert([
            'process_id' => $process_id,
            'area_id' => 2,
        ]);

        $process_id = DB::table('process')->insertGetId([
            'name' => "Определение подхода к разработке",
            'source_id' => 8,
        ]);

        DB::table('process_groups')->insert([
            'process_id' => $process_id,
            'group_id' => 2,
        ]);

        DB::table('process_areas')->insert([
            'process_id' => $process_id,
            'area_id' => 2,
        ]);

        $process_id = DB::table('process')->insertGetId([
            'name' => "Подготовка сводки по стадии Foundation",
            'source_id' => 8,
        ]);

        DB::table('process_groups')->insert([
            'process_id' => $process_id,
            'group_id' => 2,
        ]);

        DB::table('process_areas')->insert([
            'process_id' => $process_id,
            'area_id' => 2,
        ]);

        $process_id = DB::table('process')->insertGetId([
            'name' => "Пересмотр приоритезированного списка требований",
            'source_id' => 8,
        ]);

        DB::table('process_groups')->insert([
            'process_id' => $process_id,
            'group_id' => 3,
        ]);

        DB::table('process_areas')->insert([
            'process_id' => $process_id,
            'area_id' => 2,
        ]);

        $process_id = DB::table('process')->insertGetId([
            'name' => "Разработка плана сдачи",
            'source_id' => 8,
        ]);

        DB::table('process_groups')->insert([
            'process_id' => $process_id,
            'group_id' => 2,
        ]);

        DB::table('process_areas')->insert([
            'process_id' => $process_id,
            'area_id' => 3,
        ]);

        $process_id = DB::table('process')->insertGetId([
            'name' => "Создание плана Timebox-а",
            'source_id' => 8,
        ]);

        DB::table('process_groups')->insert([
            'process_id' => $process_id,
            'group_id' => 2,
        ]);

        DB::table('process_areas')->insert([
            'process_id' => $process_id,
            'area_id' => 3,
        ]);





















    }
}
