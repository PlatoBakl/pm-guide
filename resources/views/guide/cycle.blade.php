@extends('guide.main')

@section('guide-content')
    <div class="container">
        <div>
            <div class="card">
                <div class="card-header">
                    Жизенные циклы проекта
                </div>
                <div class="card-body">
                    <div class="container principles">
                        <div>
                            <table class="table table-striped">
                                <thead>
                                <tr class="d-flex">
                                    <th scope="col" class="col-1 text-center">№</th>
                                    <th scope="col" class="col-3 text-center">Название </th>
                                    <th scope="col" class="col-8 text-center">Характеристика</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr class="d-flex" data-type="principle" data-source="agile" data-category="individualMember">
                                    <td class="col-1 text-center">1</td>
                                    <td class="col-3 text-center">
                                        Предиктивный
                                    </td>
                                    <td class="col-8 text-center">
                                        Форма жизненного цикла проекта, при которой содержание, сроки и стоимость проекта определяются на ранних фазах жизненного цикла
                                    </td>
                                </tr>
                                <tr class="d-flex" data-type="principle" data-source="agile" data-category="individualMember">
                                    <td class="col-1 text-center">2</td>
                                    <td class="col-3 text-center">
                                        Итеративный
                                    </td>
                                    <td class="col-8 text-center">
                                        «Жизненный цикл проекта, при котором содержание проекта, как правило, определяется в начале жизненного цикла проекта, но расчет времени и стоимости регулярно корректируется, по мере того как увеличивается понимание продукта командой проекта. Итеративность определяет разработку продукта путем выполнения ряда повторяющихся циклов, в то время как инкрементность определяет последовательное наращивание функциональности продукта»                                     </td>
                                </tr>
                                <tr class="d-flex" data-type="principle" data-source="agile" data-category="individualMember">
                                    <td class="col-1 text-center">3</td>
                                    <td class="col-3 text-center">
                                        Инкрементный
                                    </td>
                                    <td class="col-8 text-center">
                                        Адаптивний жизненный цикл проекта, в котором поставляемый результат производится путем выполнения ряда итераций, которые последовательно наращивают функциональность в рамках заданного временного интервала. Поставляемый результат содержит такие необходимые и достаточные характеристики, чтобы считаться полным только после заключительной итерации
                                    </td>
                                </tr>
                                <tr class="d-flex" data-type="principle" data-source="agile" data-category="individualMember">
                                    <td class="col-1 text-center">4</td>
                                    <td class="col-3 text-center">
                                        Адаптивный
                                    </td>
                                    <td class="col-8 text-center">
                                        Жизненный цикл проекта, который является итеративным или инкрементным
                                    </td>
                                </tr>
                                <tr class="d-flex" data-type="principle" data-source="agile" data-category="individualMember">
                                    <td class="col-1 text-center">5</td>
                                    <td class="col-3 text-center">
                                        Смешанный или гибридный
                                    </td>
                                    <td class="col-8 text-center">
                                        Жизненный цикл проекта, который совмещает компоненты различных типов жизненных циклов
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection