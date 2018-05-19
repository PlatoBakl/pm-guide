<?php

use Illuminate\Database\Seeder;
use App\Question;
use App\Answer;

class QuestionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Question::create([
            'question' => "Количество людей, вовлеченных в проект, X1",
            'weight' => 0.07,
        ]);

        Question::create([
            'question' => "Опыт работы заказчика с данной командой проекта, X2",
            'weight' => 0.02,
        ]);

        Question::create([
            'question' => "Опыт работы в данной отрасли, X3",
            'weight' => 0.06,
        ]);

        Question::create([
            'question' => "Понимание требований, умение адаптироваться и проявлять инициативу, X4",
            'weight' => 0.05,
        ]);

        Question::create([
            'question' => "Опыт совместной работы, X5",
            'weight' => 0.02,
        ]);

        Question::create([
            'question' => "Знание используемых инструментов и методов, X6",
            'weight' => 0.04,
        ]);

        Question::create([
            'question' => "Обучаемость, X7",
            'weight' => 0.03,
        ]);

        Question::create([
            'question' => "Четкость и прямота в высказываниях, X8",
            'weight' => 0.02,
        ]);

        Question::create([
            'question' => "Умение признавать свои ошибки, X9",
            'weight' => 0.03,
        ]);

        Question::create([
            'question' => "Способность команды эффективно работать в условиях свободы или полной регламентации, X10",
            'weight' => 0.05,
        ]);

        Question::create([
            'question' => "Виды средств коммуникаций, X11",
            'weight' => 0.04,
        ]);

        Question::create([
            'question' => "Частота отчетов перед заказчиком в процессе выполнения проекта, X12",
            'weight' => 0.04,
        ]);

        Question::create([
            'question' => "Имеющееся представление о работах проекта, X13",
            'weight' => 0.04,
        ]);

        Question::create([
            'question' => "Последствия в случае неудовлетворительного завершения проекта, X14",
            'weight' => 0.07,
        ]);

        Question::create([
            'question' => "Стоимость проекта, X15",
            'weight' => 0.07,
        ]);

        Question::create([
            'question' => "Требования к качеству продукта проекта, X16",
            'weight' => 0.04,
        ]);

        Question::create([
            'question' => "Требования к срокам реализации проекта, X17",
            'weight' => 0.05,
        ]);

        Question::create([
            'question' => "Требования к точности соблюдения сроков, X18",
            'weight' => 0.03,
        ]);

        Question::create([
            'question' => "Доля требований, которые изменяются в течение месяца, X19",
            'weight' => 0.07,
        ]);

        Question::create([
            'question' => "Вероятность проявления риска, связанного с архитектурой объекта, технологиями и процессами его создания, показателями качества, X20",
            'weight' => 0.04,
        ]);

        Question::create([
            'question' => "Вероятность проявления внешних рисков (срыв работ подрядчиками, неблагоприятная политическая, экономическая обстановка в стране, изменения рынка и т.д.), X21",
            'weight' => 0.04,
        ]);

        Question::create([
            'question' => "Вероятность наступления организационных рисков (срыв финансирования, срыв поставки ресурсов, неправильная расстановка приоритетов и т.д.), X22",
            'weight' => 0.04,
        ]);

        Question::create([
            'question' => "Вероятность наступления рисковых событий, связанных с управлением проектом (некачественное планирование, контроллинг, проблемы коммуникации и т.д.), X23",
            'weight' => 0.04,
        ]);
    }
}
