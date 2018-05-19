@extends('guide.main')

@section('scripts')
    <script src="{{ asset('js/processes.js') }}"></script>
@endsection

@section('guide-content')
    <div class="container">
        <div>
            <div class="card">
                <div class="card-header">
                    Процессы УП
                </div>
                <div class="card-body">
                    <div class="row justify-content-center">
                        <form class="form-inline filters">

                            <div class="form-group">
                                <select class="form-control mb-2 mr-sm-2 mb-sm-0 form-control-sm" id="group" name="group">
                                    <option value="all">Все группы</option>
                                    <option value="initiation">Инициация</option>
                                    <option value="plan">Планирование</option>
                                    <option value="realisation">Исполнение</option>
                                    <option value="control">Контроль</option>
                                    <option value="analyze">Анализ</option>
                                    <option value="decision">Принятие решения</option>
                                    <option value="closing">Закрытие</option>
                                    <option value="forecast">Учет и прогнозирование</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <select class="form-control mb-2 mr-sm-2 mb-sm-0 form-control-sm" id="area" name="area">
                                    <option value="all">Все области</option>
                                    <option value="integration">Управление интеграцией проекта</option>
                                    <option value="content">Управление содержанием проекта</option>
                                    <option value="schedule">Управление расписанием проекта</option>
                                    <option value="cost">Управление стоимостью проекта</option>
                                    <option value="quality">Управление качеством проекта</option>
                                    <option value="resources">Управление ресурсами проекта</option>
                                    <option value="risks">Управление рисками проекта</option>
                                    <option value="stakeholders">Управление заинтересованными сторонами проекта</option>
                                    <option value="purchase">Управление закупками проекта</option>
                                    <option value="communication">Управление коммуникациями проекта</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <select class="form-control mb-2 mr-sm-2 mb-sm-0 form-control-sm" id="source" name="source">
                                    <option value="all">Все источники</option>
                                    <option value="swebok">SWEBOK</option>
                                    <option value="prince">PRINCE2</option>
                                    <option value="iso">ISO 21500</option>
                                    <option value="pmbok">PMBOK</option>
                                    <option value="fdd">FDD</option>
                                    <option value="scrum">Scrum</option>
                                    <option value="suggestions">Предложенные специалистами</option>
                                    <option value="dsdm">DSDM</option>
                                </select>
                            </div>

                            <button type="button" class="btn btn-sm btn-primary" id="filter">Фильтр</button>
                        </form>
                    </div>
                    <div class="container principles">
                        <table class="table table-striped principles">
                            <thead>
                                <tr class="d-flex">
                                    <th scope="col" class="col-1 text-center">№</th>
                                    <th scope="col" class="col-4 text-center">Название  </th>
                                    <th scope="col" class="col-2 text-center">Группа процессов  </th>
                                    <th scope="col" class="col-3 text-center">Область знаний</th>
                                    <th scope="col" class="col-2 text-center">Источник</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="d-flex" data-group="initiation" data-area="integration" data-source="swebok">
                                    <td class="col-1 text-center">1</td>
                                    <td class="col-4 text-center">
                                        Над проектом должны работать мотивированные профессионалы. Чтобы работа была сделана, создайте условия, обеспечьте поддержку и полностью доверьтесь им
                                    </td>
                                    <td class="col-2 text-center">
                                        Принцип
                                    </td>
                                    <td class="col-3 text-center">
                                        Agile-манифест
                                    </td>
                                    <td class="col-2 text-center">
                                        Ценности и принципы, касающиеся отдельного члена команды проекта
                                    </td>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection