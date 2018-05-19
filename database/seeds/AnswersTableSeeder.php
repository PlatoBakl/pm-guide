<?php

use Illuminate\Database\Seeder;
use App\Answer;

class AnswersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Answer::create([
            'answer' => "Более 100 человек",
            'answer_id' => 1,
            'question_id' => 1
        ]);

        Answer::create([
            'answer' => "От 30 до 100 человек",
            'answer_id' => 2,
            'question_id' => 1
        ]);

        Answer::create([
            'answer' => "От 10 до 30 человек",
            'answer_id' => 3,
            'question_id' => 1
        ]);

        Answer::create([
            'answer' => "До 10 человек",
            'answer_id' => 4,
            'question_id' => 1
        ]);

        Answer::create([
            'answer' => "Никогда не работал с командой",
            'answer_id' => 1,
            'question_id' => 2
        ]);

        Answer::create([
            'answer' => "Есть опыт работы с некоторыми участниками команды",
            'answer_id' => 2,
            'question_id' => 2
        ]);

        Answer::create([
            'answer' => "Сотрудничал с менеджером команды",
            'answer_id' => 3,
            'question_id' => 2
        ]);

        Answer::create([
            'answer' => "Один или более совместных проектов со всем составом команды",
            'answer_id' => 4,
            'question_id' => 2
        ]);

        Answer::create([
            'answer' => "Не имеют опыта работы в отрасли",
            'answer_id' => 1,
            'question_id' => 3
        ]);

        Answer::create([
            'answer' => "Имеют опыт работы в отрасли до 2 лет",
            'answer_id' => 2,
            'question_id' => 3
        ]);

        Answer::create([
            'answer' => "Имеют опыт работы в отрасли от 2 до 5 лет",
            'answer_id' => 3,
            'question_id' => 3
        ]);

        Answer::create([
            'answer' => "Имеют опыт работы в отрасли более 5 лет",
            'answer_id' => 4,
            'question_id' => 3
        ]);

        Answer::create([
            'answer' => "Плохо ориентируются в требованиях, требуют частых разъяснений и постоянного контроля",
            'answer_id' => 1,
            'question_id' => 4
        ]);

        Answer::create([
            'answer' => "Понимают выставленные требования, могут им следовать, но требуют регулярного контроля",
            'answer_id' => 2,
            'question_id' => 4
        ]);

        Answer::create([
            'answer' => "Понимают выставленные требования, могут им следовать, не требуя регулярного контроля",
            'answer_id' => 3,
            'question_id' => 4
        ]);

        Answer::create([
            'answer' => "Хорошо ориентируются в требованиях, могут следовать им, не требуя регулярного контроля, могут предложить лучшие альтернативы",
            'answer_id' => 4,
            'question_id' => 4
        ]);

        Answer::create([
            'answer' => "Никогда не работали вместе",
            'answer_id' => 1,
            'question_id' => 5
        ]);

        Answer::create([
            'answer' => "Работали вместе над созданием продукта, но в другой области",
            'answer_id' => 2,
            'question_id' => 5
        ]);

        Answer::create([
            'answer' => "Работали вместе над созданием одного продукта в интересующей отрасли",
            'answer_id' => 3,
            'question_id' => 5
        ]);

        Answer::create([
            'answer' => "Работали вместе над созданием нескольких продуктов в интересующей отрасли",
            'answer_id' => 4,
            'question_id' => 5
        ]);

        Answer::create([
            'answer' => "Инструменты и методы, используемые в проекте, никогда раньше не применялись и неизвестны команде",
            'answer_id' => 1,
            'question_id' => 6
        ]);

        Answer::create([
            'answer' => "Инструменты и методы, используемые в проекте, известны команде, но никогда раньше не применялись",
            'answer_id' => 2,
            'question_id' => 6
        ]);

        Answer::create([
            'answer' => "Инструменты и методы, используемые в проекте, известны команде, но применяются редко",
            'answer_id' => 3,
            'question_id' => 6
        ]);

        Answer::create([
            'answer' => "Инструменты и методы известны команде и широко применялись в прошлом",
            'answer_id' => 4,
            'question_id' => 6
        ]);

        Answer::create([
            'answer' => "Тяжело осваивают новые знания и технологии, плохо адаптируются к изменениям",
            'answer_id' => 1,
            'question_id' => 7
        ]);

        Answer::create([
            'answer' => "Некоторым членам команды сложно освоить новые знания и технологии, но команда умеет адаптироваться к изменениям",
            'answer_id' => 2,
            'question_id' => 7
        ]);

        Answer::create([
            'answer' => "Легко обучаемы, умеют адаптироваться к изменениям",
            'answer_id' => 3,
            'question_id' => 7
        ]);

        Answer::create([
            'answer' => "Легко обучаемы, всегда стремятся узнать что-то новое, хорошо адаптируются к изменениям.",
            'answer_id' => 4,
            'question_id' => 7
        ]);

        Answer::create([
            'answer' => "Не умеют четко формулировать свои идеи и редко их высказывают",
            'answer_id' => 1,
            'question_id' => 8
        ]);

        Answer::create([
            'answer' => "Умеют четко формулировать идеи, но редко высказывают свое мнение",
            'answer_id' => 2,
            'question_id' => 8
        ]);

        Answer::create([
            'answer' => "Умеют четко формулировать идеи, могут прямо высказать свое мнение",
            'answer_id' => 3,
            'question_id' => 8
        ]);

        Answer::create([
            'answer' => "Умеют четко формулировать идеи, не боятся высказывать свое мнение и могут его аргументировать",
            'answer_id' => 4,
            'question_id' => 8
        ]);

        Answer::create([
            'answer' => "Не признают открыто свои ошибки и не умеют извлекать из них опыт",
            'answer_id' => 1,
            'question_id' => 9
        ]);

        Answer::create([
            'answer' => "Редко открыто признают свои ошибки, но стараются их не повторять",
            'answer_id' => 2,
            'question_id' => 9
        ]);

        Answer::create([
            'answer' => "Открыто признают свои ошибки, и стараются их не повторять",
            'answer_id' => 3,
            'question_id' => 9
        ]);

        Answer::create([
            'answer' => "Всегда признают свои ошибки и умеют извлекать из них опыт",
            'answer_id' => 4,
            'question_id' => 9
        ]);

        Answer::create([
            'answer' => "Способна эффективно работать в условиях полной регламентации",
            'answer_id' => 1,
            'question_id' => 10
        ]);

        Answer::create([
            'answer' => "Способна эффективно работать в условиях средней регламентации",
            'answer_id' => 2,
            'question_id' => 10
        ]);

        Answer::create([
            'answer' => "Способна эффективно работать в условиях частичной регламентации",
            'answer_id' => 3,
            'question_id' => 10
        ]);

        Answer::create([
            'answer' => "Способна эффективно работать в условиях полной свободы",
            'answer_id' => 4,
            'question_id' => 10
        ]);

        Answer::create([
            'answer' => "Письменные отчеты.  Формальное  ведение документации",
            'answer_id' => 1,
            'question_id' => 11
        ]);

        Answer::create([
            'answer' => "Он-лайн общение (ICQ, Skype, E-mail)",
            'answer_id' => 2,
            'question_id' => 11
        ]);

        Answer::create([
            'answer' => "Голосовое общение (телефонная связь, интернет-конференция)",
            'answer_id' => 3,
            'question_id' => 11
        ]);

        Answer::create([
            'answer' => "Непосредственное общение команды проекта (собрания, видеоконференции)",
            'answer_id' => 4,
            'question_id' => 11
        ]);

        Answer::create([
            'answer' => "Отчет о каждой операции",
            'answer_id' => 1,
            'question_id' => 12
        ]);

        Answer::create([
            'answer' => "Отчет о выполнении пакета работ",
            'answer_id' => 2,
            'question_id' => 12
        ]);

        Answer::create([
            'answer' => "Отчет о получении компонента продукта проекта",
            'answer_id' => 3,
            'question_id' => 12
        ]);

        Answer::create([
            'answer' => "Отчет о готовности проекта",
            'answer_id' => 4,
            'question_id' => 12
        ]);

        Answer::create([
            'answer' => "Есть полный список работ по проекту. Дальнейшее внесение изменений в проект будет невозможно",
            'answer_id' => 1,
            'question_id' => 13
        ]);

        Answer::create([
            'answer' => "Есть детальный список работ по проекту с возможным дополнением и расширением",
            'answer_id' => 2,
            'question_id' => 13
        ]);

        Answer::create([
            'answer' => "Есть приблизительный список работ по проекту",
            'answer_id' => 3,
            'question_id' => 13
        ]);

        Answer::create([
            'answer' => "Есть представление о конечной цели проекта и несколько альтернатив для путей ее достижения",
            'answer_id' => 4,
            'question_id' => 13
        ]);

        Answer::create([
            'answer' => "Потеря жизни",
            'answer_id' => 1,
            'question_id' => 14
        ]);

        Answer::create([
            'answer' => "Потеря невосполнимой суммы денег",
            'answer_id' => 2,
            'question_id' => 14
        ]);

        Answer::create([
            'answer' => "Потеря несущественной суммы денег",
            'answer_id' => 3,
            'question_id' => 14
        ]);

        Answer::create([
            'answer' => "Потеря комфорта в работе",
            'answer_id' => 4,
            'question_id' => 14
        ]);

        Answer::create([
            'answer' => "Свыше 1 млн. долл. США",
            'answer_id' => 1,
            'question_id' => 15
        ]);

        Answer::create([
            'answer' => "От 300 тысяч – 1 млн. долл. США",
            'answer_id' => 2,
            'question_id' => 15
        ]);

        Answer::create([
            'answer' => "От 100 – 300 тысяч долл. США",
            'answer_id' => 3,
            'question_id' => 15
        ]);

        Answer::create([
            'answer' => "Менее  100 тысяч долл. США",
            'answer_id' => 4,
            'question_id' => 15
        ]);

        Answer::create([
            'answer' => "Высшие международные требования",
            'answer_id' => 1,
            'question_id' => 16
        ]);

        Answer::create([
            'answer' => "Международные требования",
            'answer_id' => 2,
            'question_id' => 16
        ]);

        Answer::create([
            'answer' => "Национальные требования",
            'answer_id' => 3,
            'question_id' => 16
        ]);

        Answer::create([
            'answer' => "Требования локального рынка",
            'answer_id' => 4,
            'question_id' => 16
        ]);

        Answer::create([
            'answer' => "Сроки не лимитируют",
            'answer_id' => 1,
            'question_id' => 17
        ]);

        Answer::create([
            'answer' => "Не очень срочно",
            'answer_id' => 2,
            'question_id' => 17
        ]);

        Answer::create([
            'answer' => "Не очень срочно",
            'answer_id' => 3,
            'question_id' => 17
        ]);

        Answer::create([
            'answer' => "Не очень срочно",
            'answer_id' => 4,
            'question_id' => 17
        ]);

        Answer::create([
            'answer' => "Сроки должны быть точно соблюдены",
            'answer_id' => 1,
            'question_id' => 18
        ]);

        Answer::create([
            'answer' => "Допускается некоторое отклонение от сроков",
            'answer_id' => 2,
            'question_id' => 18
        ]);

        Answer::create([
            'answer' => "Допускается значительное отклонение от сроков",
            'answer_id' => 3,
            'question_id' => 18
        ]);

        Answer::create([
            'answer' => "Допускается значительное отклонение от сроков",
            'answer_id' => 4,
            'question_id' => 18
        ]);

        Answer::create([
            'answer' => "До 7%",
            'answer_id' => 1,
            'question_id' => 19
        ]);

        Answer::create([
            'answer' => "От 7 до 25%",
            'answer_id' => 2,
            'question_id' => 19
        ]);

        Answer::create([
            'answer' => "От 25 до 45%",
            'answer_id' => 3,
            'question_id' => 19
        ]);

        Answer::create([
            'answer' => "Более 45%",
            'answer_id' => 4,
            'question_id' => 19
        ]);

        Answer::create([
            'answer' => "Рисковое событие, скорее всего, не проявится (10%)",
            'answer_id' => 1,
            'question_id' => 20
        ]);

        Answer::create([
            'answer' => "Вероятность проявления рисковых событий равна 50%",
            'answer_id' => 2,
            'question_id' => 20
        ]);

        Answer::create([
            'answer' => "Рисковое событие, скорее всего, проявится (75%)",
            'answer_id' => 3,
            'question_id' => 20
        ]);

        Answer::create([
            'answer' => "Рисковое событие наверняка произойдет (≥95%)",
            'answer_id' => 4,
            'question_id' => 20
        ]);

        Answer::create([
            'answer' => "Рисковое событие, скорее всего, не проявится (10%)",
            'answer_id' => 1,
            'question_id' => 21
        ]);

        Answer::create([
            'answer' => "Вероятность проявления рисковых событий равна 50%",
            'answer_id' => 2,
            'question_id' => 21
        ]);

        Answer::create([
            'answer' => "Рисковое событие, скорее всего, проявится (75%)",
            'answer_id' => 3,
            'question_id' => 21
        ]);

        Answer::create([
            'answer' => "Рисковое событие наверняка произойдет (≥95%)",
            'answer_id' => 4,
            'question_id' => 21
        ]);

        Answer::create([
            'answer' => "Рисковое событие, скорее всего, не проявится (10%)",
            'answer_id' => 1,
            'question_id' => 22
        ]);

        Answer::create([
            'answer' => "Вероятность проявления рисковых событий равна 50%",
            'answer_id' => 2,
            'question_id' => 22
        ]);

        Answer::create([
            'answer' => "Рисковое событие, скорее всего, проявится (75%)",
            'answer_id' => 3,
            'question_id' => 22
        ]);

        Answer::create([
            'answer' => "Рисковое событие наверняка произойдет (≥95%)",
            'answer_id' => 4,
            'question_id' => 22
        ]);

        Answer::create([
            'answer' => "Рисковое событие, скорее всего, не проявится (10%)",
            'answer_id' => 1,
            'question_id' => 23
        ]);

        Answer::create([
            'answer' => "Вероятность проявления рисковых событий равна 50%",
            'answer_id' => 2,
            'question_id' => 23
        ]);

        Answer::create([
            'answer' => "Рисковое событие, скорее всего, проявится (75%)",
            'answer_id' => 3,
            'question_id' => 23
        ]);

        Answer::create([
            'answer' => "Рисковое событие наверняка произойдет (≥95%)",
            'answer_id' => 4,
            'question_id' => 23
        ]);
    }
}
