@extends('guide.main')

@section('scripts')
    <script src="{{ asset('js/roles.js') }}"></script>
@endsection

@section('guide-content')
    <div class="container">
        <div>
            <div class="card">
                <div class="card-header">
                    Роли и ответсвенности в УП
                </div>
                <div class="card-body">
                    <div class="row justify-content-center">
                        <form class="form-inline filters">

                            <div class="form-group">
                                <select class="form-control mb-2 mr-sm-2 mb-sm-0 form-control-sm" id="source" name="source">
                                    <option value="all">Все источники</option>
                                    <option value="prince">PRINCE2</option>
                                    <option value="xp">XP</option>
                                    <option value="swebok">SWEBOK</option>
                                    <option value="scrum">Scrum</option>
                                    <option value="iso">ISO 21500</option>
                                    <option value="pmbok">PMBOK</option>
                                    <option value="dsdm">DSDM</option>
                                    <option value="fdd">FDD</option>
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
                                    <th scope="col" class="col-2 text-center">Источник </th>
                                    <th scope="col" class="col-3 text-center">Роли</th>
                                    <th scope="col" class="col-6 text-center">Ответственности</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="d-flex" data-source="prince">
                                    <td class="col-1 text-center">1</td>
                                    <td class="col-2 text-center">
                                        PRINCE2
                                    </td>
                                    <td class="col-3 text-center">
                                        Executive (глава исполнительной власти)
                                    </td>
                                    <td class="col-6 text-center">
                                        Несет окончательную ответственность за успех проекта
                                    </td>
                                </tr>
                                <tr class="d-flex" data-source="prince">
                                    <td class="col-1 text-center">2</td>
                                    <td class="col-2 text-center">
                                        PRINCE2
                                    </td>
                                    <td class="col-3 text-center">
                                        Старший пользователь
                                    </td>
                                    <td class="col-6 text-center">
                                        Представляет требования конечных пользователей в совете
                                    </td>
                                </tr>
                                <tr class="d-flex" data-source="prince">
                                    <td class="col-1 text-center">3</td>
                                    <td class="col-2 text-center">
                                        PRINCE2
                                    </td>
                                    <td class="col-3 text-center">
                                        Старший поставщик
                                    </td>
                                    <td class="col-6 text-center">
                                        Представляет интересы поставщиков
                                    </td>
                                </tr>
                                <tr class="d-flex" data-source="prince">
                                    <td class="col-1 text-center">4</td>
                                    <td class="col-2 text-center">
                                        PRINCE2
                                    </td>
                                    <td class="col-3 text-center">
                                        Менеджер проекта
                                    </td>
                                    <td class="col-6 text-center">
                                        Несет ответственность за повседневное управление проектом от имени Совета проекта
                                    </td>
                                </tr>
                                <tr class="d-flex" data-source="prince">
                                    <td class="col-1 text-center">5</td>
                                    <td class="col-2 text-center">
                                        PRINCE2
                                    </td>
                                    <td class="col-3 text-center">
                                        Менеджер команды
                                    </td>
                                    <td class="col-6 text-center">
                                        Несет ответственность за обеспечение качества и других параметров производства в команде
                                    </td>
                                </tr>
                                <tr class="d-flex" data-source="prince">
                                    <td class="col-1 text-center">6</td>
                                    <td class="col-2 text-center">
                                        PRINCE2
                                    </td>
                                    <td class="col-3 text-center">
                                        Project Assurance (обеспечение  проекта)
                                    </td>
                                    <td class="col-6 text-center">
                                        Обеспечивает интересы основных заинтересованных сторон
                                    </td>
                                </tr>
                                <tr class="d-flex" data-source="prince">
                                    <td class="col-1 text-center">7</td>
                                    <td class="col-2 text-center">
                                        PRINCE2
                                    </td>
                                    <td class="col-3 text-center">
                                        Change Authority (руководитель по изменениям)
                                    </td>
                                    <td class="col-6 text-center">
                                        Принимает решения о некоторых из запросов на изменение от имени Совета проекта
                                    </td>
                                </tr>
                                <tr class="d-flex" data-source="prince">
                                    <td class="col-1 text-center">8</td>
                                    <td class="col-2 text-center">
                                        PRINCE2
                                    </td>
                                    <td class="col-3 text-center">
                                        Поддержка проекта
                                    </td>
                                    <td class="col-6 text-center">
                                        Помогает менеджеру проекта в деятельности по управлению
                                    </td>
                                </tr>
                                <tr class="d-flex" data-source="xp">
                                    <td class="col-1 text-center">9</td>
                                    <td class="col-2 text-center">
                                        XP
                                    </td>
                                    <td class="col-3 text-center">
                                        Программист
                                    </td>
                                    <td class="col-6 text-center">
                                        Пишет тесты, дизайн и код; осуществляет рефакторинг; идентифицирует и оценивает задачи и истории
                                    </td>
                                </tr>
                                <tr class="d-flex" data-source="xp">
                                    <td class="col-1 text-center">10</td>
                                    <td class="col-2 text-center">
                                        XP
                                    </td>
                                    <td class="col-3 text-center">
                                        Заказчик
                                    </td>
                                    <td class="col-6 text-center">
                                        Пишет истории и определяет приемочные испытания; выбирает истории для релиза и для итерации
                                    </td>
                                </tr>
                                <tr class="d-flex" data-source="xp">
                                    <td class="col-1 text-center">11</td>
                                    <td class="col-2 text-center">
                                        XP
                                    </td>
                                    <td class="col-3 text-center">
                                        Испытатель
                                    </td>
                                    <td class="col-6 text-center">
                                        Помогает заказчикам писать и разрабатывать тесты
                                    </td>
                                </tr>
                                <tr class="d-flex" data-source="xp">
                                    <td class="col-1 text-center">12</td>
                                    <td class="col-2 text-center">
                                        XP
                                    </td>
                                    <td class="col-3 text-center">
                                        Трекер
                                    </td>
                                    <td class="col-6 text-center">
                                        Регулярно собирает истории и приемочные тесты прогресса от разработчиков для создания видимых настенных графиков
                                    </td>
                                </tr>
                                <tr class="d-flex" data-source="xp">
                                    <td class="col-1 text-center">13</td>
                                    <td class="col-2 text-center">
                                        XP
                                    </td>
                                    <td class="col-3 text-center">
                                        Тренер
                                    </td>
                                    <td class="col-6 text-center">
                                        При необходимости обучает членов команды процессу XP, вмешивается в случае проблем, отслеживает, следуют ли XP процессу
                                    </td>
                                </tr>
                                <tr class="d-flex" data-source="xp">
                                    <td class="col-1 text-center">14</td>
                                    <td class="col-2 text-center">
                                        XP
                                    </td>
                                    <td class="col-3 text-center">
                                        Консультант (необязательно)
                                    </td>
                                    <td class="col-6 text-center">
                                        Предоставление консультаций при необходимости
                                    </td>
                                </tr>
                                <tr class="d-flex" data-source="xp">
                                    <td class="col-1 text-center">15</td>
                                    <td class="col-2 text-center">
                                        XP
                                    </td>
                                    <td class="col-3 text-center">
                                        Большой босс (Менеджер проекта)
                                    </td>
                                    <td class="col-6 text-center">
                                        Формирует команду, получает ресурсы, управляет людьми и проблемами, осуществляет связь с внешними группами
                                    </td>
                                </tr>
                                <tr class="d-flex" data-source="swebok">
                                    <td class="col-1 text-center">16</td>
                                    <td class="col-2 text-center">
                                        SWEBOK
                                    </td>
                                    <td class="col-3 text-center">
                                        Менеджер проекта
                                    </td>
                                    <td class="col-6 text-center">
                                        Несет ответственность за результаты проекта
                                    </td>
                                </tr>
                                <tr class="d-flex" data-source="swebok">
                                    <td class="col-1 text-center">17</td>
                                    <td class="col-2 text-center">
                                        SWEBOK
                                    </td>
                                    <td class="col-3 text-center">
                                        Команда проекта
                                    </td>
                                    <td class="col-6 text-center">
                                        Исполняет работы проекта для достижения его целей
                                    </td>
                                </tr>
                                <tr class="d-flex" data-source="scrum">
                                    <td class="col-1 text-center">18</td>
                                    <td class="col-2 text-center">
                                        SCRUM
                                    </td>
                                    <td class="col-3 text-center">
                                        Scrum мастер
                                    </td>
                                    <td class="col-6 text-center">
                                        Несет ответственность за то, чтобы проект осуществлялся в соответствии с принципами Scrum и был выполнен вовремя
                                    </td>
                                </tr>
                                <tr class="d-flex" data-source="scrum">
                                    <td class="col-1 text-center">19</td>
                                    <td class="col-2 text-center">
                                        SCRUM
                                    </td>
                                    <td class="col-3 text-center">
                                        Владелец продукта
                                    </td>
                                    <td class="col-6 text-center">
                                        Несет ответственность за управление Беклогом продукта и за максимизацию ценности продукта и работы Команды разработки
                                    </td>
                                </tr>
                                <tr class="d-flex" data-source="scrum">
                                    <td class="col-1 text-center">20</td>
                                    <td class="col-2 text-center">
                                        SCRUM
                                    </td>
                                    <td class="col-3 text-center">
                                        Команда разработки
                                    </td>
                                    <td class="col-6 text-center">
                                        Состоит из 3-9 профессионалов, которые выполняют работу по созданию Инкремента "Готовности" продукта в конце каждого Спринта. Команда Scrum несет ответственность за достижение целей спринта
                                    </td>
                                </tr>
                                <tr class="d-flex" data-source="iso">
                                    <td class="col-1 text-center">21</td>
                                    <td class="col-2 text-center">
                                        ISO 21500
                                    </td>
                                    <td class="col-3 text-center">
                                        Менеджер проекта
                                    </td>
                                    <td class="col-6 text-center">
                                        Несет ответственность за получение результатов проекта
                                    </td>
                                </tr>
                                <tr class="d-flex" data-source="iso">
                                    <td class="col-1 text-center">22</td>
                                    <td class="col-2 text-center">
                                        ISO 21500
                                    </td>
                                    <td class="col-3 text-center">
                                        Команда управления проектом
                                    </td>
                                    <td class="col-6 text-center">
                                        Помогает менеджеру проекта в осуществлении руководства и управления деятельностью по проектам, направленной на получение результатов проекта
                                    </td>
                                </tr>
                                <tr class="d-flex" data-source="iso">
                                    <td class="col-1 text-center">23</td>
                                    <td class="col-2 text-center">
                                        ISO 21500
                                    </td>
                                    <td class="col-3 text-center">
                                        Команда проектa
                                    </td>
                                    <td class="col-6 text-center">
                                        Выполняет работы проекта
                                    </td>
                                </tr>
                                <tr class="d-flex" data-source="iso">
                                    <td class="col-1 text-center">24</td>
                                    <td class="col-2 text-center">
                                        ISO 21500
                                    </td>
                                    <td class="col-3 text-center">
                                        Спонсор проекта
                                    </td>
                                    <td class="col-6 text-center">
                                        Легализует проект, принимает важные решения и разрешает проблемы и конфликты
                                    </td>
                                </tr>
                                <tr class="d-flex" data-source="iso">
                                    <td class="col-1 text-center">25</td>
                                    <td class="col-2 text-center">
                                        ISO 21500
                                    </td>
                                    <td class="col-3 text-center">
                                        Офис управления проектом
                                    </td>
                                    <td class="col-6 text-center">
                                        Выполняет широкий спектр работ, включая собственно управление, стандартизацию, обучение управлению проектами, а также планирование и мониторинг проекта
                                    </td>
                                </tr>
                                <tr class="d-flex" data-source="iso">
                                    <td class="col-1 text-center">26</td>
                                    <td class="col-2 text-center">
                                        ISO 21500
                                    </td>
                                    <td class="col-3 text-center">
                                        Руководящий комитет или совет проекта
                                    </td>
                                    <td class="col-6 text-center">
                                        Участвует в управлении проектом, выдавая директивные указания
                                    </td>
                                </tr>
                                <tr class="d-flex" data-source="iso">
                                    <td class="col-1 text-center">27</td>
                                    <td class="col-2 text-center">
                                        ISO 21500
                                    </td>
                                    <td class="col-3 text-center">
                                        Другие члены команды проекта
                                    </td>
                                    <td class="col-6 text-center">
                                        Поддерживают менеджера проекта в исполнении работ проекта для достижения целей проекта.
                                    </td>
                                </tr>
                                <tr class="d-flex" data-source="iso">
                                    <td class="col-1 text-center">28</td>
                                    <td class="col-2 text-center">
                                        ISO 21500
                                    </td>
                                    <td class="col-3 text-center">
                                        Спонсор
                                    </td>
                                    <td class="col-6 text-center">
                                        Предоставляет ресурсы и поддержку для проекта, программы или портфеля и ответственен за достижение успеха
                                    </td>
                                </tr>
                                <tr class="d-flex" data-source="pmbok">
                                    <td class="col-1 text-center">29</td>
                                    <td class="col-2 text-center">
                                        PMBOK
                                    </td>
                                    <td class="col-3 text-center">
                                        Офис управления проектами
                                    </td>
                                    <td class="col-6 text-center">
                                        Организационная структура, стандартизирующая процессы руководства проектами и способствующая обмену ресурсами, методологиями, инструментами и методами
                                    </td>
                                </tr>
                                <tr class="d-flex" data-source="pmbok">
                                    <td class="col-1 text-center">30</td>
                                    <td class="col-2 text-center">
                                        PMBOK
                                    </td>
                                    <td class="col-3 text-center">
                                        Менеджер программы
                                    </td>
                                    <td class="col-6 text-center">
                                        Несет ответственность за руководство, ведение и выполнение программы
                                    </td>
                                </tr>
                                <tr class="d-flex" data-source="pmbok">
                                    <td class="col-1 text-center">31</td>
                                    <td class="col-2 text-center">
                                        PMBOK
                                    </td>
                                    <td class="col-3 text-center">
                                        Менеджер портфеля
                                    </td>
                                    <td class="col-6 text-center">
                                        Несет ответственность за установление, мониторинг и управление всеми назначенными портфелями
                                    </td>
                                </tr>
                                <tr class="d-flex" data-source="pmbok">
                                    <td class="col-1 text-center">32</td>
                                    <td class="col-2 text-center">
                                        PMBOK
                                    </td>
                                    <td class="col-3 text-center">
                                        Управляющие операционной деятельностью
                                    </td>
                                    <td class="col-6 text-center">
                                        Несет ответственность за наблюдение, руководство и контроль бизнес-операций
                                    </td>
                                </tr>
                                <tr class="d-flex" data-source="pmbok">
                                    <td class="col-1 text-center">33</td>
                                    <td class="col-2 text-center">
                                        PMBOK
                                    </td>
                                    <td class="col-3 text-center">
                                        Функциональный руководитель
                                    </td>
                                    <td class="col-6 text-center">
                                        Лицо, обладающее руководящими полномочиями в подразделении функциональной организации.
                                    </td>
                                </tr>
                                <tr class="d-flex" data-source="dsdm">
                                    <td class="col-1 text-center">34</td>
                                    <td class="col-2 text-center">
                                        DSDM
                                    </td>
                                    <td class="col-3 text-center">
                                        Business Sponsor
                                    </td>
                                    <td class="col-6 text-center">
                                        Несет особую ответственность за бизнес-проект и его бюджет на протяжении всего проекта
                                    </td>
                                </tr>
                                <tr class="d-flex" data-source="dsdm">
                                    <td class="col-1 text-center">35</td>
                                    <td class="col-2 text-center">
                                        DSDM
                                    </td>
                                    <td class="col-3 text-center">
                                        Business Visionary
                                    </td>
                                    <td class="col-6 text-center">
                                        Определяет видение будущего
                                    </td>
                                </tr>
                                <tr class="d-flex" data-source="dsdm">
                                    <td class="col-1 text-center">36</td>
                                    <td class="col-2 text-center">
                                        DSDM
                                    </td>
                                    <td class="col-3 text-center">
                                        Business Ambassador
                                    </td>
                                    <td class="col-6 text-center">
                                        Ежедневное руководство проектом от имени заказчика
                                    </td>
                                </tr>
                                <tr class="d-flex" data-source="dsdm">
                                    <td class="col-1 text-center">37</td>
                                    <td class="col-2 text-center">
                                        DSDM
                                    </td>
                                    <td class="col-3 text-center">
                                        Business Advisor
                                    </td>
                                    <td class="col-6 text-center">
                                        Эксперт по бизнес-теме
                                    </td>
                                </tr>
                                <tr class="d-flex" data-source="dsdm">
                                    <td class="col-1 text-center">38</td>
                                    <td class="col-2 text-center">
                                        DSDM
                                    </td>
                                    <td class="col-3 text-center">
                                        Technical Coordinator
                                    </td>
                                    <td class="col-6 text-center">
                                        Техническое руководство
                                    </td>
                                </tr>
                                <tr class="d-flex" data-source="dsdm">
                                    <td class="col-1 text-center">39</td>
                                    <td class="col-2 text-center">
                                        DSDM
                                    </td>
                                    <td class="col-3 text-center">
                                        Solution Developers
                                    </td>
                                    <td class="col-6 text-center">
                                        Создание продукта
                                    </td>
                                </tr>
                                <tr class="d-flex" data-source="dsdm">
                                    <td class="col-1 text-center">40</td>
                                    <td class="col-2 text-center">
                                        DSDM
                                    </td>
                                    <td class="col-3 text-center">
                                        Solution Tester
                                    </td>
                                    <td class="col-6 text-center">
                                        Тестирование продукта
                                    </td>
                                </tr>
                                <tr class="d-flex" data-source="dsdm">
                                    <td class="col-1 text-center">41</td>
                                    <td class="col-2 text-center">
                                        DSDM
                                    </td>
                                    <td class="col-3 text-center">
                                        Technical Advisor
                                    </td>
                                    <td class="col-6 text-center">
                                        Советник по техническим вопросам
                                    </td>
                                </tr>
                                <tr class="d-flex" data-source="dsdm">
                                    <td class="col-1 text-center">42</td>
                                    <td class="col-2 text-center">
                                        DSDM
                                    </td>
                                    <td class="col-3 text-center">
                                        Project Manager
                                    </td>
                                    <td class="col-6 text-center">
                                        Высокоуровневое планирование, мониторинг прогресса, решение проблем
                                    </td>
                                </tr>
                                <tr class="d-flex" data-source="dsdm">
                                    <td class="col-1 text-center">43</td>
                                    <td class="col-2 text-center">
                                        DSDM
                                    </td>
                                    <td class="col-3 text-center">
                                        Team Leader
                                    </td>
                                    <td class="col-6 text-center">
                                        Направление проекта в соответствии с DSDM
                                    </td>
                                </tr>
                                <tr class="d-flex" data-source="dsdm">
                                    <td class="col-1 text-center">44</td>
                                    <td class="col-2 text-center">
                                        DSDM
                                    </td>
                                    <td class="col-3 text-center">
                                        Workshop Facilitator
                                    </td>
                                    <td class="col-6 text-center">
                                        Ведущий семинара
                                    </td>
                                </tr>
                                <tr class="d-flex" data-source="dsdm">
                                    <td class="col-1 text-center">45</td>
                                    <td class="col-2 text-center">
                                        DSDM
                                    </td>
                                    <td class="col-3 text-center">
                                        DSDM Coach
                                    </td>
                                    <td class="col-6 text-center">
                                        Обучение команды и помощь в использовании DSDM
                                    </td>
                                </tr>
                                <tr class="d-flex" data-source="dsdm">
                                    <td class="col-1 text-center">46</td>
                                    <td class="col-2 text-center">
                                        DSDM
                                    </td>
                                    <td class="col-3 text-center">
                                        Business Analyst
                                    </td>
                                    <td class="col-6 text-center">
                                        Установление взаимосвязи между заказчиком и техническими ролями
                                    </td>
                                </tr>
                                <tr class="d-flex" data-source="fdd">
                                    <td class="col-1 text-center">47</td>
                                    <td class="col-2 text-center">
                                        FDD
                                    </td>
                                    <td class="col-3 text-center">
                                        Project Manager
                                    </td>
                                    <td class="col-6 text-center">
                                        Администрирование и финансовые аспекты проекта
                                    </td>
                                </tr>
                                <tr class="d-flex" data-source="fdd">
                                    <td class="col-1 text-center">48</td>
                                    <td class="col-2 text-center">
                                        FDD
                                    </td>
                                    <td class="col-3 text-center">
                                        Chief Architect
                                    </td>
                                    <td class="col-6 text-center">
                                        Проектирование системы
                                    </td>
                                </tr>
                                <tr class="d-flex" data-source="fdd">
                                    <td class="col-1 text-center">49</td>
                                    <td class="col-2 text-center">
                                        FDD
                                    </td>
                                    <td class="col-3 text-center">
                                        Development Manager
                                    </td>
                                    <td class="col-6 text-center">
                                        Ежедневный мониторинг, идентификация рисков, решение проблем, планирование релизов и ресурсов
                                    </td>
                                </tr>
                                <tr class="d-flex" data-source="fdd">
                                    <td class="col-1 text-center">50</td>
                                    <td class="col-2 text-center">
                                        FDD
                                    </td>
                                    <td class="col-3 text-center">
                                        Class Owner
                                    </td>
                                    <td class="col-6 text-center">
                                        Формирование функциональных команд и построение назначенных классов
                                    </td>
                                </tr>
                                <tr class="d-flex" data-source="fdd">
                                    <td class="col-1 text-center">51</td>
                                    <td class="col-2 text-center">
                                        FDD
                                    </td>
                                    <td class="col-3 text-center">
                                        Chief Programmer
                                    </td>
                                    <td class="col-6 text-center">
                                        Выявление различных классов и Class Owner-ов, направление функциональных команд
                                    </td>
                                </tr>
                                <tr class="d-flex" data-source="fdd">
                                    <td class="col-1 text-center">52</td>
                                    <td class="col-2 text-center">
                                        FDD
                                    </td>
                                    <td class="col-3 text-center">
                                        Domain Experts
                                    </td>
                                    <td class="col-6 text-center">
                                        Предоставление знаний об исследуемой области, понимание поведения системы
                                    </td>
                                </tr>
                                <tr class="d-flex" data-source="fdd">
                                    <td class="col-1 text-center">53</td>
                                    <td class="col-2 text-center">
                                        FDD
                                    </td>
                                    <td class="col-3 text-center">
                                        Release Manager
                                    </td>
                                    <td class="col-6 text-center">
                                        Управление процессом разработки
                                    </td>
                                </tr>
                                <tr class="d-flex" data-source="fdd">
                                    <td class="col-1 text-center">54</td>
                                    <td class="col-2 text-center">
                                        FDD
                                    </td>
                                    <td class="col-3 text-center">
                                        Language Guru
                                    </td>
                                    <td class="col-6 text-center">
                                        Предоставление знаний по технологии разработки
                                    </td>
                                </tr>
                                <tr class="d-flex" data-source="fdd">
                                    <td class="col-1 text-center">55</td>
                                    <td class="col-2 text-center">
                                        FDD
                                    </td>
                                    <td class="col-3 text-center">
                                        Build Engineer
                                    </td>
                                    <td class="col-6 text-center">
                                        Выполнение процесса сборки
                                    </td>
                                </tr>
                                <tr class="d-flex" data-source="fdd">
                                    <td class="col-1 text-center">56</td>
                                    <td class="col-2 text-center">
                                        FDD
                                    </td>
                                    <td class="col-3 text-center">
                                        Tool Smith
                                    </td>
                                    <td class="col-6 text-center">
                                        Создание утилит для проекта
                                    </td>
                                </tr>
                                <tr class="d-flex" data-source="fdd">
                                    <td class="col-1 text-center">57</td>
                                    <td class="col-2 text-center">
                                        FDD
                                    </td>
                                    <td class="col-3 text-center">
                                        System Administrator
                                    </td>
                                    <td class="col-6 text-center">
                                        Администрирование системы
                                    </td>
                                </tr>
                                <tr class="d-flex" data-source="fdd">
                                    <td class="col-1 text-center">57</td>
                                    <td class="col-2 text-center">
                                        FDD
                                    </td>
                                    <td class="col-3 text-center">
                                        Tester
                                    </td>
                                    <td class="col-6 text-center">
                                        Тестирование и верификация
                                    </td>
                                </tr>
                                <tr class="d-flex" data-source="fdd">
                                    <td class="col-1 text-center">58</td>
                                    <td class="col-2 text-center">
                                        FDD
                                    </td>
                                    <td class="col-3 text-center">
                                        Deployer
                                    </td>
                                    <td class="col-6 text-center">
                                        Развертывание функций
                                    </td>
                                </tr>
                                <tr class="d-flex" data-source="fdd">
                                    <td class="col-1 text-center">58</td>
                                    <td class="col-2 text-center">
                                        FDD
                                    </td>
                                    <td class="col-3 text-center">
                                        Technical Writer
                                    </td>
                                    <td class="col-6 text-center">
                                        Написание технической документации
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