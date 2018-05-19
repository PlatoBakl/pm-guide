@extends('guide.main')

@section('scripts')
    <script src="{{ asset('js/principles.js') }}"></script>
@endsection

@section('guide-content')
    <div class="container">
        <div>
            <div class="card">
                <div class="card-header">
                    Принципы и ценности УП
                </div>
                <div class="card-body">
                    <div class="row justify-content-center">
                        <form class="form-inline filters">

                            <div class="form-group">
                                <select class="form-control mb-2 mr-sm-2 mb-sm-0 form-control-sm" id="type" name="type">
                                    <option value="all">Все типы</option>
                                    <option value="principle">Принцип</option>
                                    <option value="value">Ценность</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <select class="form-control mb-2 mr-sm-2 mb-sm-0 form-control-sm" id="source" name="source">
                                    <option value="all">Все источники</option>
                                    <option value="agile">Agile-манифест</option>
                                    <option value="scrum">Scrum</option>
                                    <option value="kanban">Kanban</option>
                                    <option value="xp">XP</option>
                                    <option value="codex">Кодекс профессиональной этики и поведения</option>
                                    <option value="prince">PRINCE2</option>
                                    <option value="dsdm">DSDM</option>
                                    <option value="pmbok">PMBOK</option>
                                    <option value="swebok">SWEBOK</option>
                                    <option value="fdd">FDD</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <select class="form-control mb-2 mr-sm-2 mb-sm-0 form-control-sm" id="category" name="category">
                                    <option value="all">Все категории</option>
                                    <option value="individualMember">Касающиеся отдельного члена команды проекта</option>
                                    <option value="allMembers">Касающиеся взаимодействия членов команды</option>
                                    <option value="product">Относящиеся к продукту проекта</option>
                                    <option value="technology">Касающиеся технологии работы команды проекта</option>
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
                                    <th scope="col" class="col-4 text-center">Наименование </th>
                                    <th scope="col" class="col-2 text-center">Тип</th>
                                    <th scope="col" class="col-2 text-center">Источник</th>
                                    <th scope="col" class="col-3 text-center">Категория</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="d-flex" data-type="principle" data-source="agile" data-category="individualMember">
                                    <td class="col-1 text-center">1</td>
                                    <td class="col-4 text-center">
                                        Над проектом должны работать мотивированные профессионалы. Чтобы работа была сделана, создайте условия, обеспечьте поддержку и полностью доверьтесь им
                                    </td>
                                    <td class="col-2 text-center">
                                        Принцип
                                    </td>
                                    <td class="col-2 text-center">
                                        Agile-манифест
                                    </td>
                                    <td class="col-3 text-center">
                                        Ценности и принципы, касающиеся отдельного члена команды проекта
                                    </td>
                                </tr>
                                <tr class="d-flex" data-type="principle" data-source="agile" data-category="individualMember">
                                    <td class="col-1 text-center">2</td>
                                    <td class="col-4 text-center">
                                        Самые лучшие требования, архитектурные и технические решения рождаются у самоорганизующихся команд
                                    </td>
                                    <td class="col-2 text-center">
                                        Принцип
                                    </td>
                                    <td class="col-2 text-center">
                                        Agile-манифест
                                    </td>
                                    <td class="col-3 text-center">
                                        Ценности и принципы, касающиеся отдельного члена команды проекта
                                    </td>
                                </tr>
                                <tr class="d-flex" data-type="principle" data-source="scrum" data-category="individualMember">
                                    <td class="col-1 text-center">3</td>
                                    <td class="col-4 text-center">
                                        Самоорганизация
                                    </td>
                                    <td class="col-2 text-center">
                                        Принцип
                                    </td>
                                    <td class="col-2 text-center">
                                        Scrum
                                    </td>
                                    <td class="col-3 text-center">
                                        Ценности и принципы, касающиеся отдельного члена команды проекта
                                    </td>
                                </tr>
                                <tr class="d-flex" data-type="principle" data-source="kanban" data-category="individualMember">
                                    <td class="col-1 text-center">4</td>
                                    <td class="col-4 text-center">
                                        Поощряйте акты лидерства на всех уровнях
                                    </td>
                                    <td class="col-2 text-center">
                                        Принцип
                                    </td>
                                    <td class="col-2 text-center">
                                        Kanban
                                    </td>
                                    <td class="col-3 text-center">
                                        Ценности и принципы, касающиеся отдельного члена команды проекта
                                    </td>
                                </tr>
                                <tr class="d-flex" data-type="principle" data-source="xp" data-category="individualMember">
                                    <td class="col-1 text-center">5</td>
                                    <td class="col-4 text-center">
                                        Гуманность
                                    </td>
                                    <td class="col-2 text-center">
                                        Принцип
                                    </td>
                                    <td class="col-2 text-center">
                                        XP
                                    </td>
                                    <td class="col-3 text-center">
                                        Ценности и принципы, касающиеся отдельного члена команды проекта
                                    </td>
                                </tr>
                                <tr class="d-flex" data-type="principle" data-source="xp" data-category="individualMember">
                                    <td class="col-1 text-center">6</td>
                                    <td class="col-4 text-center">
                                        Принятая ответственность
                                    </td>
                                    <td class="col-2 text-center">
                                        Принцип
                                    </td>
                                    <td class="col-2 text-center">
                                        XP
                                    </td>
                                    <td class="col-3 text-center">
                                        Ценности и принципы, касающиеся отдельного члена команды проекта
                                    </td>
                                </tr>
                                <tr class="d-flex" data-type="value" data-source="xp" data-category="individualMember">
                                    <td class="col-1 text-center">7</td>
                                    <td class="col-4 text-center">
                                        Мужество
                                    </td>
                                    <td class="col-2 text-center">
                                        Ценность
                                    </td>
                                    <td class="col-2 text-center">
                                        XP
                                    </td>
                                    <td class="col-3 text-center">
                                        Ценности и принципы, касающиеся отдельного члена команды проекта
                                    </td>
                                </tr>
                                <tr class="d-flex" data-type="value" data-source="xp" data-category="individualMember">
                                    <td class="col-1 text-center">8</td>
                                    <td class="col-4 text-center">
                                        Уважение
                                    </td>
                                    <td class="col-2 text-center">
                                        Ценность
                                    </td>
                                    <td class="col-2 text-center">
                                        XP
                                    </td>
                                    <td class="col-3 text-center">
                                        Ценности и принципы, касающиеся отдельного члена команды проекта
                                    </td>
                                </tr>
                                <tr class="d-flex" data-type="value" data-source="codex" data-category="individualMember">
                                    <td class="col-1 text-center">9</td>
                                    <td class="col-4 text-center">
                                        Ответственность
                                    </td>
                                    <td class="col-2 text-center">
                                        Ценность
                                    </td>
                                    <td class="col-2 text-center">
                                        Кодекс профессиональной этики и поведения
                                    </td>
                                    <td class="col-3 text-center">
                                        Ценности и принципы, касающиеся отдельного члена команды проекта
                                    </td>
                                </tr>
                                <tr class="d-flex" data-type="value" data-source="codex" data-category="individualMember">
                                    <td class="col-1 text-center">10</td>
                                    <td class="col-4 text-center">
                                        Справедливость
                                    </td>
                                    <td class="col-2 text-center">
                                        Ценность
                                    </td>
                                    <td class="col-2 text-center">
                                        Кодекс профессиональной этики и поведения
                                    </td>
                                    <td class="col-3 text-center">
                                        Ценности и принципы, касающиеся отдельного члена команды проекта
                                    </td>
                                </tr>
                                <tr class="d-flex" data-type="value" data-source="codex" data-category="individualMember">
                                    <td class="col-1 text-center">11</td>
                                    <td class="col-4 text-center">
                                        Честность
                                    </td>
                                    <td class="col-2 text-center">
                                        Ценность
                                    </td>
                                    <td class="col-2 text-center">
                                        Кодекс профессиональной этики и поведения
                                    </td>
                                    <td class="col-3 text-center">
                                        Ценности и принципы, касающиеся отдельного члена команды проекта
                                    </td>
                                </tr>
                                <tr class="d-flex" data-type="principle" data-source="prince" data-category="individualMember">
                                    <td class="col-1 text-center">12</td>
                                    <td class="col-4 text-center">
                                        Обучение на опыте
                                    </td>
                                    <td class="col-2 text-center">
                                        Принцип
                                    </td>
                                    <td class="col-2 text-center">
                                        PRINCE2
                                    </td>
                                    <td class="col-3 text-center">
                                        Ценности и принципы, касающиеся отдельного члена команды проекта
                                    </td>
                                </tr>
                                <tr class="d-flex" data-type="value" data-source="agile" data-category="allMembers">
                                    <td class="col-1 text-center">13</td>
                                    <td class="col-4 text-center">
                                        Люди и взаимодействие важнее процессов и инструментов
                                    </td>
                                    <td class="col-2 text-center">
                                        Ценность
                                    </td>
                                    <td class="col-2 text-center">
                                        Agile-манифест
                                    </td>
                                    <td class="col-3 text-center">
                                        Ценности и принципы, касающиеся взаимодействия членов команды
                                    </td>
                                </tr>
                                <tr class="d-flex" data-type="value" data-source="agile" data-category="allMembers">
                                    <td class="col-1 text-center">14</td>
                                    <td class="col-4 text-center">
                                        Сотрудничество с заказчиком важнее согласования условий контракта
                                    </td>
                                    <td class="col-2 text-center">
                                        Ценность
                                    </td>
                                    <td class="col-2 text-center">
                                        Agile-манифест
                                    </td>
                                    <td class="col-3 text-center">
                                        Ценности и принципы, касающиеся взаимодействия членов команды
                                    </td>
                                </tr>
                                <tr class="d-flex" data-type="principle" data-source="agile" data-category="allMembers">
                                    <td class="col-1 text-center">15</td>
                                    <td class="col-4 text-center">
                                        Непосредственное общение является наиболее практичным и эффективным способом обмена информацией как с командой, так и внутри команды
                                    </td>
                                    <td class="col-2 text-center">
                                        Принцип
                                    </td>
                                    <td class="col-2 text-center">
                                        Agile-манифест
                                    </td>
                                    <td class="col-3 text-center">
                                        Ценности и принципы, касающиеся взаимодействия членов команды
                                    </td>
                                </tr>
                                <tr class="d-flex" data-type="principle" data-source="agile" data-category="allMembers">
                                    <td class="col-1 text-center">15</td>
                                    <td class="col-4 text-center">
                                        На протяжении всего проекта разработчики и представители бизнеса должны ежедневно работать вместе
                                    </td>
                                    <td class="col-2 text-center">
                                        Принцип
                                    </td>
                                    <td class="col-2 text-center">
                                        Agile-манифест
                                    </td>
                                    <td class="col-3 text-center">
                                        Ценности и принципы, касающиеся взаимодействия членов команды
                                    </td>
                                </tr>
                                <tr class="d-flex" data-type="principle" data-source="scrum" data-category="allMembers">
                                    <td class="col-1 text-center">17</td>
                                    <td class="col-4 text-center">
                                        Сотрудничество
                                    </td>
                                    <td class="col-2 text-center">
                                        Принцип
                                    </td>
                                    <td class="col-2 text-center">
                                        Scrum
                                    </td>
                                    <td class="col-3 text-center">
                                        Ценности и принципы, касающиеся взаимодействия членов команды
                                    </td>
                                </tr>
                                <tr class="d-flex" data-type="value" data-source="xp" data-category="allMembers">
                                    <td class="col-1 text-center">18</td>
                                    <td class="col-4 text-center">
                                        Коммуникация
                                    </td>
                                    <td class="col-2 text-center">
                                        Ценность
                                    </td>
                                    <td class="col-2 text-center">
                                        XP
                                    </td>
                                    <td class="col-3 text-center">
                                        Ценности и принципы, касающиеся взаимодействия членов команды
                                    </td>
                                </tr>
                                <tr class="d-flex" data-type="value" data-source="xp" data-category="allMembers">
                                    <td class="col-1 text-center">19</td>
                                    <td class="col-4 text-center">
                                        Обратная связь
                                    </td>
                                    <td class="col-2 text-center">
                                        Ценность
                                    </td>
                                    <td class="col-2 text-center">
                                        XP
                                    </td>
                                    <td class="col-3 text-center">
                                        Ценности и принципы, касающиеся взаимодействия членов команды
                                    </td>
                                </tr>
                                <tr class="d-flex" data-type="principle" data-source="xp" data-category="allMembers">
                                    <td class="col-1 text-center">20</td>
                                    <td class="col-4 text-center">
                                        Взаимная выгода
                                    </td>
                                    <td class="col-2 text-center">
                                        Принцип
                                    </td>
                                    <td class="col-2 text-center">
                                        XP
                                    </td>
                                    <td class="col-3 text-center">
                                        Ценности и принципы, касающиеся взаимодействия членов команды
                                    </td>
                                </tr>
                                <tr class="d-flex" data-type="principle" data-source="xp" data-category="allMembers">
                                    <td class="col-1 text-center">21</td>
                                    <td class="col-4 text-center">
                                        Разнообразие
                                    </td>
                                    <td class="col-2 text-center">
                                        Принцип
                                    </td>
                                    <td class="col-2 text-center">
                                        XP
                                    </td>
                                    <td class="col-3 text-center">
                                        Ценности и принципы, касающиеся взаимодействия членов команды
                                    </td>
                                </tr>
                                <tr class="d-flex" data-type="principle" data-source="principe" data-category="allMembers">
                                    <td class="col-1 text-center">22</td>
                                    <td class="col-4 text-center">
                                        Определенные роли и обязанности
                                    </td>
                                    <td class="col-2 text-center">
                                        Принцип
                                    </td>
                                    <td class="col-2 text-center">
                                        PRINCE2
                                    </td>
                                    <td class="col-3 text-center">
                                        Ценности и принципы, касающиеся взаимодействия членов команды
                                    </td>
                                </tr>
                                <tr class="d-flex" data-type="principle" data-source="dsdm" data-category="allMembers">
                                    <td class="col-1 text-center">23</td>
                                    <td class="col-4 text-center">
                                        Cотрудничайте
                                    </td>
                                    <td class="col-2 text-center">
                                        Принцип
                                    </td>
                                    <td class="col-2 text-center">
                                        DSDM
                                    </td>
                                    <td class="col-3 text-center">
                                        Ценности и принципы, касающиеся взаимодействия членов команды
                                    </td>
                                </tr>
                                <tr class="d-flex" data-type="principle" data-source="dsdm" data-category="allMembers">
                                    <td class="col-1 text-center">24</td>
                                    <td class="col-4 text-center">
                                        Общайтесь непрерывно и понятно
                                    </td>
                                    <td class="col-2 text-center">
                                        Принцип
                                    </td>
                                    <td class="col-2 text-center">
                                        DSDM
                                    </td>
                                    <td class="col-3 text-center">
                                        Ценности и принципы, касающиеся взаимодействия членов команды
                                    </td>
                                </tr>
                                <tr class="d-flex" data-type="value" data-source="agile" data-category="product">
                                    <td class="col-1 text-center">25</td>
                                    <td class="col-4 text-center">
                                        Работающий продукт важнее исчерпывающей документации
                                    </td>
                                    <td class="col-2 text-center">
                                        Ценность
                                    </td>
                                    <td class="col-2 text-center">
                                        Agile-манифест
                                    </td>
                                    <td class="col-3 text-center">
                                        Ценности и принципы, относящиеся к продукту проекта
                                    </td>
                                </tr>
                                <tr class="d-flex" data-type="principle" data-source="agile" data-category="product">
                                    <td class="col-1 text-center">26</td>
                                    <td class="col-4 text-center">
                                        Работающий продукт – основной показатель прогресса
                                    </td>
                                    <td class="col-2 text-center">
                                        Принцип
                                    </td>
                                    <td class="col-2 text-center">
                                        Agile-манифест
                                    </td>
                                    <td class="col-3 text-center">
                                        Ценности и принципы, относящиеся к продукту проекта
                                    </td>
                                </tr>
                                <tr class="d-flex" data-type="principle" data-source="agile" data-category="product">
                                    <td class="col-1 text-center">27</td>
                                    <td class="col-4 text-center">
                                        Наивысшим приоритетом для нас является удовлетворение потребностей заказчика благодаря регулярной и ранней поставке ценного программного обеспечения
                                    </td>
                                    <td class="col-2 text-center">
                                        Принцип
                                    </td>
                                    <td class="col-2 text-center">
                                        Agile-манифест
                                    </td>
                                    <td class="col-3 text-center">
                                        Ценности и принципы, относящиеся к продукту проекта
                                    </td>
                                </tr>
                                <tr class="d-flex" data-type="principle" data-source="agile" data-category="product">
                                    <td class="col-1 text-center">28</td>
                                    <td class="col-4 text-center">
                                        Работающий продукт следует выпускать как можно чаще, с периодичностью от пары недель до пары месяцев
                                    </td>
                                    <td class="col-2 text-center">
                                        Принцип
                                    </td>
                                    <td class="col-2 text-center">
                                        Agile-манифест
                                    </td>
                                    <td class="col-3 text-center">
                                        Ценности и принципы, относящиеся к продукту проекта
                                    </td>
                                </tr>
                                <tr class="d-flex" data-type="principle" data-source="agile" data-category="product">
                                    <td class="col-1 text-center">29</td>
                                    <td class="col-4 text-center">
                                        Изменение требований приветствуется, даже на поздних стадиях разработки. Agile-процессы позволяют использовать изменения для обеспечения заказнику конкурентного преимущества
                                    </td>
                                    <td class="col-2 text-center">
                                        Принцип
                                    </td>
                                    <td class="col-2 text-center">
                                        Agile-манифест
                                    </td>
                                    <td class="col-3 text-center">
                                        Ценности и принципы, относящиеся к продукту проекта
                                    </td>
                                </tr>
                                <tr class="d-flex" data-type="principle" data-source="scrum" data-category="product">
                                    <td class="col-1 text-center">30</td>
                                    <td class="col-4 text-center">
                                        Приоритезация на основе ценностей
                                    </td>
                                    <td class="col-2 text-center">
                                        Принцип
                                    </td>
                                    <td class="col-2 text-center">
                                        Scrum
                                    </td>
                                    <td class="col-3 text-center">
                                        Ценности и принципы, относящиеся к продукту проекта
                                    </td>
                                </tr>
                                <tr class="d-flex" data-type="principle" data-source="xp" data-category="product">
                                    <td class="col-1 text-center">31</td>
                                    <td class="col-4 text-center">
                                        Экономика
                                    </td>
                                    <td class="col-2 text-center">
                                        Принцип
                                    </td>
                                    <td class="col-2 text-center">
                                        XP
                                    </td>
                                    <td class="col-3 text-center">
                                        Ценности и принципы, относящиеся к продукту проекта
                                    </td>
                                </tr>
                                <tr class="d-flex" data-type="principle" data-source="prince" data-category="product">
                                    <td class="col-1 text-center">32</td>
                                    <td class="col-4 text-center">
                                        Акцент на продукты
                                    </td>
                                    <td class="col-2 text-center">
                                        Принцип
                                    </td>
                                    <td class="col-2 text-center">
                                        PRINCE2
                                    </td>
                                    <td class="col-3 text-center">
                                        Ценности и принципы, относящиеся к продукту проекта
                                    </td>
                                </tr>
                                <tr class="d-flex" data-type="principle" data-source="prince" data-category="product">
                                    <td class="col-1 text-center">33</td>
                                    <td class="col-4 text-center">
                                        Непрерывное бизнес-обоснование
                                    </td>
                                    <td class="col-2 text-center">
                                        Принцип
                                    </td>
                                    <td class="col-2 text-center">
                                        PRINCE2
                                    </td>
                                    <td class="col-3 text-center">
                                        Ценности и принципы, относящиеся к продукту проекта
                                    </td>
                                </tr>
                                <tr class="d-flex" data-type="principle" data-source="dsdm" data-category="product">
                                    <td class="col-1 text-center">34</td>
                                    <td class="col-4 text-center">
                                        Фокусируйтесь на потребностях бизнеса
                                    </td>
                                    <td class="col-2 text-center">
                                        Принцип
                                    </td>
                                    <td class="col-2 text-center">
                                        DSDM
                                    </td>
                                    <td class="col-3 text-center">
                                        Ценности и принципы, относящиеся к продукту проекта
                                    </td>
                                </tr>
                                <tr class="d-flex" data-type="value" data-source="agile" data-category="technology">
                                    <td class="col-1 text-center">35</td>
                                    <td class="col-4 text-center">
                                        Готовность к изменениям важнее следования первоначальному плану
                                    </td>
                                    <td class="col-2 text-center">
                                        Ценность
                                    </td>
                                    <td class="col-2 text-center">
                                        Agile-манифест
                                    </td>
                                    <td class="col-3 text-center">
                                        Ценности и принципы, касающиеся технологии работы команды проекта
                                    </td>
                                </tr>
                                <tr class="d-flex" data-type="principle" data-source="agile" data-category="technology">
                                    <td class="col-1 text-center">36</td>
                                    <td class="col-4 text-center">
                                        Постоянное внимание к техническому совершенству и качеству проектирования повышает гибкость проекта
                                    </td>
                                    <td class="col-2 text-center">
                                        Принцип
                                    </td>
                                    <td class="col-2 text-center">
                                        Agile-манифест
                                    </td>
                                    <td class="col-3 text-center">
                                        Ценности и принципы, касающиеся технологии работы команды проекта
                                    </td>
                                </tr>
                                <tr class="d-flex" data-type="principle" data-source="agile" data-category="technology">
                                    <td class="col-1 text-center">37</td>
                                    <td class="col-4 text-center">
                                        Простота – искусство минимизации лишней работы – крайне необходима
                                    </td>
                                    <td class="col-2 text-center">
                                        Принцип
                                    </td>
                                    <td class="col-2 text-center">
                                        Agile-манифест
                                    </td>
                                    <td class="col-3 text-center">
                                        Ценности и принципы, касающиеся технологии работы команды проекта
                                    </td>
                                </tr>
                                <tr class="d-flex" data-type="principle" data-source="agile" data-category="technology">
                                    <td class="col-1 text-center">38</td>
                                    <td class="col-4 text-center">
                                        Команда должна систематически анализировать возможные способы улучшения эффективности и соответственно корректировать стиль своей работы
                                    </td>
                                    <td class="col-2 text-center">
                                        Принцип
                                    </td>
                                    <td class="col-2 text-center">
                                        Agile-манифест
                                    </td>
                                    <td class="col-3 text-center">
                                        Ценности и принципы, касающиеся технологии работы команды проекта
                                    </td>
                                </tr>
                                <tr class="d-flex" data-type="principle" data-source="agile" data-category="technology">
                                    <td class="col-1 text-center">39</td>
                                    <td class="col-4 text-center">
                                        Инвесторы, разработчики и пользователи должны иметь возможность поддерживать постоянный ритм бесконечно. Agile помогает наладить такой устойчивый процесс разработки
                                    </td>
                                    <td class="col-2 text-center">
                                        Принцип
                                    </td>
                                    <td class="col-2 text-center">
                                        Agile-манифест
                                    </td>
                                    <td class="col-3 text-center">
                                        Ценности и принципы, касающиеся технологии работы команды проекта
                                    </td>
                                </tr>
                                <tr class="d-flex" data-type="principle" data-source="scrum" data-category="technology">
                                    <td class="col-1 text-center">40</td>
                                    <td class="col-4 text-center">
                                        Итеративная разработка
                                    </td>
                                    <td class="col-2 text-center">
                                        Принцип
                                    </td>
                                    <td class="col-2 text-center">
                                        Scrum
                                    </td>
                                    <td class="col-3 text-center">
                                        Ценности и принципы, касающиеся технологии работы команды проекта
                                    </td>
                                </tr>
                                <tr class="d-flex" data-type="principle" data-source="scrum" data-category="technology">
                                    <td class="col-1 text-center">41</td>
                                    <td class="col-4 text-center">
                                        Эмпирический контроль процессов
                                    </td>
                                    <td class="col-2 text-center">
                                        Принцип
                                    </td>
                                    <td class="col-2 text-center">
                                        Scrum
                                    </td>
                                    <td class="col-3 text-center">
                                        Ценности и принципы, касающиеся технологии работы команды проекта
                                    </td>
                                </tr>
                                <tr class="d-flex" data-type="principle" data-source="scrum" data-category="technology">
                                    <td class="col-1 text-center">42</td>
                                    <td class="col-4 text-center">
                                        Time-boxing
                                    </td>
                                    <td class="col-2 text-center">
                                        Принцип
                                    </td>
                                    <td class="col-2 text-center">
                                        Scrum
                                    </td>
                                    <td class="col-3 text-center">
                                        Ценности и принципы, касающиеся технологии работы команды проекта
                                    </td>
                                </tr>
                                <tr class="d-flex" data-type="principle" data-source="kanban" data-category="technology">
                                    <td class="col-1 text-center">43</td>
                                    <td class="col-4 text-center">
                                        Just-In-Time
                                    </td>
                                    <td class="col-2 text-center">
                                        Принцип
                                    </td>
                                    <td class="col-2 text-center">
                                        Kanban
                                    </td>
                                    <td class="col-3 text-center">
                                        Ценности и принципы, касающиеся технологии работы команды проекта
                                    </td>
                                </tr>
                                <tr class="d-flex" data-type="principle" data-source="kanban" data-category="technology">
                                    <td class="col-1 text-center">44</td>
                                    <td class="col-4 text-center">
                                        Начните с того, что вы делаете сейчас
                                    </td>
                                    <td class="col-2 text-center">
                                        Принцип
                                    </td>
                                    <td class="col-2 text-center">
                                        Kanban
                                    </td>
                                    <td class="col-3 text-center">
                                        Ценности и принципы, касающиеся технологии работы команды проекта
                                    </td>
                                </tr>
                                <tr class="d-flex" data-type="principle" data-source="kanban" data-category="technology">
                                    <td class="col-1 text-center">45</td>
                                    <td class="col-4 text-center">
                                        Согласитесь проводить инкрементное, эволюционное изменение
                                    </td>
                                    <td class="col-2 text-center">
                                        Принцип
                                    </td>
                                    <td class="col-2 text-center">
                                        Kanban
                                    </td>
                                    <td class="col-3 text-center">
                                        Ценности и принципы, касающиеся технологии работы команды проекта
                                    </td>
                                </tr>
                                <tr class="d-flex" data-type="principle" data-source="kanban" data-category="technology">
                                    <td class="col-1 text-center">46</td>
                                    <td class="col-4 text-center">
                                        Уважайте текущий процесс, роли, обязанности и названия должностей
                                    </td>
                                    <td class="col-2 text-center">
                                        Принцип
                                    </td>
                                    <td class="col-2 text-center">
                                        Kanban
                                    </td>
                                    <td class="col-3 text-center">
                                        Ценности и принципы, касающиеся технологии работы команды проекта
                                    </td>
                                </tr>
                                <tr class="d-flex" data-type="value" data-source="xp" data-category="technology">
                                    <td class="col-1 text-center">47</td>
                                    <td class="col-4 text-center">
                                        Простота
                                    </td>
                                    <td class="col-2 text-center">
                                        Ценность
                                    </td>
                                    <td class="col-2 text-center">
                                        XP
                                    </td>
                                    <td class="col-3 text-center">
                                        Ценности и принципы, касающиеся технологии работы команды проекта
                                    </td>
                                </tr>
                                <tr class="d-flex" data-type="principle" data-source="xp" data-category="technology">
                                    <td class="col-1 text-center">48</td>
                                    <td class="col-4 text-center">
                                        Качество
                                    </td>
                                    <td class="col-2 text-center">
                                        Принцип
                                    </td>
                                    <td class="col-2 text-center">
                                        XP
                                    </td>
                                    <td class="col-3 text-center">
                                        Ценности и принципы, касающиеся технологии работы команды проекта
                                    </td>
                                </tr>
                                <tr class="d-flex" data-type="principle" data-source="xp" data-category="technology">
                                    <td class="col-1 text-center">49</td>
                                    <td class="col-4 text-center">
                                        Улучшение
                                    </td>
                                    <td class="col-2 text-center">
                                        Принцип
                                    </td>
                                    <td class="col-2 text-center">
                                        XP
                                    </td>
                                    <td class="col-3 text-center">
                                        Ценности и принципы, касающиеся технологии работы команды проекта
                                    </td>
                                </tr>
                                <tr class="d-flex" data-type="principle" data-source="xp" data-category="technology">
                                    <td class="col-1 text-center">50</td>
                                    <td class="col-4 text-center">
                                        Самоподобие
                                    </td>
                                    <td class="col-2 text-center">
                                        Принцип
                                    </td>
                                    <td class="col-2 text-center">
                                        XP
                                    </td>
                                    <td class="col-3 text-center">
                                        Ценности и принципы, касающиеся технологии работы команды проекта
                                    </td>
                                </tr>
                                <tr class="d-flex" data-type="principle" data-source="xp" data-category="technology">
                                    <td class="col-1 text-center">51</td>
                                    <td class="col-4 text-center">
                                        Отражение
                                    </td>
                                    <td class="col-2 text-center">
                                        Принцип
                                    </td>
                                    <td class="col-2 text-center">
                                        XP
                                    </td>
                                    <td class="col-3 text-center">
                                        Ценности и принципы, касающиеся технологии работы команды проекта
                                    </td>
                                </tr>
                                <tr class="d-flex" data-type="principle" data-source="xp" data-category="technology">
                                    <td class="col-1 text-center">52</td>
                                    <td class="col-4 text-center">
                                        Поток
                                    </td>
                                    <td class="col-2 text-center">
                                        Принцип
                                    </td>
                                    <td class="col-2 text-center">
                                        XP
                                    </td>
                                    <td class="col-3 text-center">
                                        Ценности и принципы, касающиеся технологии работы команды проекта
                                    </td>
                                </tr>
                                <tr class="d-flex" data-type="principle" data-source="xp" data-category="technology">
                                    <td class="col-1 text-center">53</td>
                                    <td class="col-4 text-center">
                                        Возможность
                                    </td>
                                    <td class="col-2 text-center">
                                        Принцип
                                    </td>
                                    <td class="col-2 text-center">
                                        XP
                                    </td>
                                    <td class="col-3 text-center">
                                        Ценности и принципы, касающиеся технологии работы команды проекта
                                    </td>
                                </tr>
                                <tr class="d-flex" data-type="principle" data-source="xp" data-category="technology">
                                    <td class="col-1 text-center">54</td>
                                    <td class="col-4 text-center">
                                        Избыточность
                                    </td>
                                    <td class="col-2 text-center">
                                        Принцип
                                    </td>
                                    <td class="col-2 text-center">
                                        XP
                                    </td>
                                    <td class="col-3 text-center">
                                        Ценности и принципы, касающиеся технологии работы команды проекта
                                    </td>
                                </tr>
                                <tr class="d-flex" data-type="principle" data-source="xp" data-category="technology">
                                    <td class="col-1 text-center">55</td>
                                    <td class="col-4 text-center">
                                        Неудача
                                    </td>
                                    <td class="col-2 text-center">
                                        Принцип
                                    </td>
                                    <td class="col-2 text-center">
                                        XP
                                    </td>
                                    <td class="col-3 text-center">
                                        Ценности и принципы, касающиеся технологии работы команды проекта
                                    </td>
                                </tr>
                                <tr class="d-flex" data-type="principle" data-source="xp" data-category="technology">
                                    <td class="col-1 text-center">56</td>
                                    <td class="col-4 text-center">
                                        Детские шаги
                                    </td>
                                    <td class="col-2 text-center">
                                        Принцип
                                    </td>
                                    <td class="col-2 text-center">
                                        XP
                                    </td>
                                    <td class="col-3 text-center">
                                        Ценности и принципы, касающиеся технологии работы команды проекта
                                    </td>
                                </tr>
                                <tr class="d-flex" data-type="principle" data-source="pmbok" data-category="technology">
                                    <td class="col-1 text-center">57</td>
                                    <td class="col-4 text-center">
                                        Организационное управление проектами
                                    </td>
                                    <td class="col-2 text-center">
                                        Принцип
                                    </td>
                                    <td class="col-2 text-center">
                                        PMBOK
                                    </td>
                                    <td class="col-3 text-center">
                                        Ценности и принципы, касающиеся технологии работы команды проекта
                                    </td>
                                </tr>
                                <tr class="d-flex" data-type="principle" data-source="pmbok" data-category="technology">
                                    <td class="col-1 text-center">58</td>
                                    <td class="col-4 text-center">
                                        Области знаний и группы процессов управления проектами
                                    </td>
                                    <td class="col-2 text-center">
                                        Принцип
                                    </td>
                                    <td class="col-2 text-center">
                                        PMBOK
                                    </td>
                                    <td class="col-3 text-center">
                                        Ценности и принципы, касающиеся технологии работы команды проекта
                                    </td>
                                </tr>
                                <tr class="d-flex" data-type="principle" data-source="prince" data-category="technology">
                                    <td class="col-1 text-center">59</td>
                                    <td class="col-4 text-center">
                                        Адаптация к окружению проекта
                                    </td>
                                    <td class="col-2 text-center">
                                        Принцип
                                    </td>
                                    <td class="col-2 text-center">
                                        PRINCE2
                                    </td>
                                    <td class="col-3 text-center">
                                        Ценности и принципы, касающиеся технологии работы команды проекта
                                    </td>
                                </tr>
                                <tr class="d-flex" data-type="principle" data-source="prince" data-category="technology">
                                    <td class="col-1 text-center">60</td>
                                    <td class="col-4 text-center">
                                        Управление по стадиям
                                    </td>
                                    <td class="col-2 text-center">
                                        Принцип
                                    </td>
                                    <td class="col-2 text-center">
                                        PRINCE2
                                    </td>
                                    <td class="col-3 text-center">
                                        Ценности и принципы, касающиеся технологии работы команды проекта
                                    </td>
                                </tr>
                                <tr class="d-flex" data-type="principle" data-source="prince" data-category="technology">
                                    <td class="col-1 text-center">61</td>
                                    <td class="col-4 text-center">
                                        Управление по исключениям
                                    </td>
                                    <td class="col-2 text-center">
                                        Принцип
                                    </td>
                                    <td class="col-2 text-center">
                                        PRINCE2
                                    </td>
                                    <td class="col-3 text-center">
                                        Ценности и принципы, касающиеся технологии работы команды проекта
                                    </td>
                                </tr>
                                <tr class="d-flex" data-type="principle" data-source="swebok" data-category="technology">
                                    <td class="col-1 text-center">62</td>
                                    <td class="col-4 text-center">
                                        Области знаний, подобласти и процессы
                                    </td>
                                    <td class="col-2 text-center">
                                        Принцип
                                    </td>
                                    <td class="col-2 text-center">
                                        SWEBOK
                                    </td>
                                    <td class="col-3 text-center">
                                        Ценности и принципы, касающиеся технологии работы команды проекта
                                    </td>
                                </tr>
                                <tr class="d-flex" data-type="principle" data-source="dsdm" data-category="technology">
                                    <td class="col-1 text-center">63</td>
                                    <td class="col-4 text-center">
                                        Поставляйте вовремя
                                    </td>
                                    <td class="col-2 text-center">
                                        Принцип
                                    </td>
                                    <td class="col-2 text-center">
                                        DSDM
                                    </td>
                                    <td class="col-3 text-center">
                                        Ценности и принципы, касающиеся технологии работы команды проекта
                                    </td>
                                </tr>
                                <tr class="d-flex" data-type="principle" data-source="dsdm" data-category="technology">
                                    <td class="col-1 text-center">64</td>
                                    <td class="col-4 text-center">
                                        Никогда не варьируйте качество
                                    </td>
                                    <td class="col-2 text-center">
                                        Принцип
                                    </td>
                                    <td class="col-2 text-center">
                                        DSDM
                                    </td>
                                    <td class="col-3 text-center">
                                        Ценности и принципы, касающиеся технологии работы команды проекта
                                    </td>
                                </tr>
                                <tr class="d-flex" data-type="principle" data-source="dsdm" data-category="technology">
                                    <td class="col-1 text-center">65</td>
                                    <td class="col-4 text-center">
                                        Создавайте инкрементально и только на прочных основах
                                    </td>
                                    <td class="col-2 text-center">
                                        Принцип
                                    </td>
                                    <td class="col-2 text-center">
                                        DSDM
                                    </td>
                                    <td class="col-3 text-center">
                                        Ценности и принципы, касающиеся технологии работы команды проекта
                                    </td>
                                </tr>
                                <tr class="d-flex" data-type="principle" data-source="dsdm" data-category="technology">
                                    <td class="col-1 text-center">66</td>
                                    <td class="col-4 text-center">
                                        Разрабатывайте итеративно
                                    </td>
                                    <td class="col-2 text-center">
                                        Принцип
                                    </td>
                                    <td class="col-2 text-center">
                                        DSDM
                                    </td>
                                    <td class="col-3 text-center">
                                        Ценности и принципы, касающиеся технологии работы команды проекта
                                    </td>
                                </tr>
                                <tr class="d-flex" data-type="principle" data-source="dsdm" data-category="technology">
                                    <td class="col-1 text-center">67</td>
                                    <td class="col-4 text-center">
                                        Демонстрируйте контроль
                                    </td>
                                    <td class="col-2 text-center">
                                        Принцип
                                    </td>
                                    <td class="col-2 text-center">
                                        DSDM
                                    </td>
                                    <td class="col-3 text-center">
                                        Ценности и принципы, касающиеся технологии работы команды проекта
                                    </td>
                                </tr>
                                <tr class="d-flex" data-type="value" data-source="fdd" data-category="technology">
                                    <td class="col-1 text-center">68</td>
                                    <td class="col-4 text-center">
                                        С целью масштабирования для более крупных проектов необходимо наличие системы построения систем.
                                    </td>
                                    <td class="col-2 text-center">
                                        Ценность
                                    </td>
                                    <td class="col-2 text-center">
                                        FDD
                                    </td>
                                    <td class="col-3 text-center">
                                        Ценности и принципы, касающиеся технологии работы команды проекта
                                    </td>
                                </tr>
                                <tr class="d-flex" data-type="value" data-source="fdd" data-category="technology">
                                    <td class="col-1 text-center">69</td>
                                    <td class="col-4 text-center">
                                        Простой, четко определенный процесс работает лучше всего
                                    </td>
                                    <td class="col-2 text-center">
                                        Ценность
                                    </td>
                                    <td class="col-2 text-center">
                                        FDD
                                    </td>
                                    <td class="col-3 text-center">
                                        Ценности и принципы, касающиеся технологии работы команды проекта
                                    </td>
                                </tr>
                                <tr class="d-flex" data-type="value" data-source="fdd" data-category="technology">
                                    <td class="col-1 text-center">70</td>
                                    <td class="col-4 text-center">
                                        Шаги процесса должны быть логичными, и их ценность очевидна для каждого члена команды.
                                    </td>
                                    <td class="col-2 text-center">
                                        Ценность
                                    </td>
                                    <td class="col-2 text-center">
                                        FDD
                                    </td>
                                    <td class="col-3 text-center">
                                        Ценности и принципы, касающиеся технологии работы команды проекта
                                    </td>
                                </tr>
                                <tr class="d-flex" data-type="value" data-source="fdd" data-category="technology">
                                    <td class="col-1 text-center">71</td>
                                    <td class="col-4 text-center">
                                        Чрезмерная увлеченность процессом может помешать выполнению реальной работы
                                    </td>
                                    <td class="col-2 text-center">
                                        Ценность
                                    </td>
                                    <td class="col-2 text-center">
                                        FDD
                                    </td>
                                    <td class="col-3 text-center">
                                        Ценности и принципы, касающиеся технологии работы команды проекта
                                    </td>
                                </tr>
                                <tr class="d-flex" data-type="value" data-source="fdd" data-category="technology">
                                    <td class="col-1 text-center">72</td>
                                    <td class="col-4 text-center">
                                        Хорошие процессы переходят на задний план, позволяя членам команды  сосредоточиться на результатах
                                    </td>
                                    <td class="col-2 text-center">
                                        Ценность
                                    </td>
                                    <td class="col-2 text-center">
                                        FDD
                                    </td>
                                    <td class="col-3 text-center">
                                        Ценности и принципы, касающиеся технологии работы команды проекта
                                    </td>
                                </tr>
                                <tr class="d-flex" data-type="value" data-source="fdd" data-category="technology">
                                    <td class="col-1 text-center">73</td>
                                    <td class="col-4 text-center">
                                        Лучше всего использовать короткие, итеративные, функционально-ориентированные жизненные циклы.
                                    </td>
                                    <td class="col-2 text-center">
                                        Ценность
                                    </td>
                                    <td class="col-2 text-center">
                                        FDD
                                    </td>
                                    <td class="col-3 text-center">
                                        Ценности и принципы, касающиеся технологии работы команды проекта
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