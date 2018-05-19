@extends('guide.main')

@section('guide-content')
    <div class="container">
        <div>
            <div class="card">
                <div class="card-header">
                    Огранизационные структуры при УП
                </div>
                <div class="card-body">
                    <div class="container principles">
                        <div>
                            <table class="table table-striped">
                                <thead>
                                <tr class="d-flex">
                                    <th scope="col" class="col-3 text-center">Название </th>
                                    <th scope="col" class="col-9 text-center">Характеристика</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr class="d-flex" data-type="principle" data-source="agile" data-category="individualMember">
                                    <td class="col-3 text-center">
                                        Функциональная организация
                                    </td>
                                    <td class="col-9 text-center">
                                        Организационная структура, в которой персонал группируется по областям специализации, а руководитель проекта имеет ограниченные полномочия по назначению работы и использованию ресурсов
                                    </td>
                                </tr>
                                <tr class="d-flex" data-type="principle" data-source="agile" data-category="individualMember">
                                    <td class="col-3 text-center">
                                        Проектная организация
                                    </td>
                                    <td class="col-9 text-center">
                                        Любая организационная структура, в которой руководитель проекта обладает всеми полномочиями по установлению приоритетов, использованию ресурсов и руководству работой лиц, назначенных для исполнения проекта
                                    </td>
                                </tr>
                                <tr class="d-flex" data-type="principle" data-source="agile" data-category="individualMember">
                                    <td class="col-3 text-center">
                                        Матричная организация
                                    </td>
                                    <td class="col-9 text-center">
                                        Любая организационная структура, в которой руководитель проекта разделяет ответственность с функциональными руководителями по установлению приоритетов и руководству работой лиц, назначенных для исполнения проекта
                                    </td>
                                </tr>
                                <tr class="d-flex" data-type="principle" data-source="agile" data-category="individualMember">
                                    <td class="col-3 text-center">
                                        Пустотелая организация (hollow corporation)
                                    </td>
                                    <td class="col-9 text-center">
                                        Организация, которая часть своих бизнес-функций передает сторонним подрядчикам. Передача функций производится на основе контракта. Организация оставляет за собой планирование, координацию, администрирование
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