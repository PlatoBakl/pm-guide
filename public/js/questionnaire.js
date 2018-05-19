(function(global, $) {

    answers = {};

    $('ul.pagination li').first().addClass('active');

    $('button#next').click(function () {

        let question = $('p#question').attr('data-id');

        $('input.points').each(function (i) {
            questions[question].answers[i].points = this.value;
        });

        if(question == 22){
            finishQuestionnaire();
        }else{
            openQuestion(+question + 1);
        }
    });

    $('ul.pagination li').click(function () {

        let question = $('p#question').attr('data-id');

        $('input.points').each(function (i) {
            questions[question].answers[i].points = this.value;
        });

        let newQuestion = this.dataset.id;
        openQuestion(newQuestion);
    });

})(window, jQuery);

function openQuestion(questionId) {

    let newQuestion = questions[questionId];

    $('ul.pagination li').removeClass('active');
    $(`ul.pagination li:eq(${questionId})`).addClass('active');

    $('p#question').attr('data-id', questionId).text(newQuestion.question);

    $('tbody.questionnaire tr').each(function (i) {

        let answer = newQuestion.answers[i];

        $(this).find(`td:eq(0)`).text(answer.answer).attr('data-id', answer.answer_id);
        $(this).find(`td:eq(1)`).find('input').val("0");
    });

    $('button#next').text((questionId == 22) ? 'Finish' : 'Next');
}

function finishQuestionnaire() {

    let params = [];

    $.each(questions, function (i, item) {

        let question = [];

        $.each(item.answers, function (i, answer) {

            question.push((answer.points) ? answer.points : 0);
        });

        params[item.id - 1] = question;
    });

    $.ajax({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        type: 'POST',
        url : "/choice/calculate",
        data: {
            answers: JSON.stringify(params),
            project: project
        }
    }).done(function (result) {

            $('div.container.choice').html(result.html);
        }
    );
}