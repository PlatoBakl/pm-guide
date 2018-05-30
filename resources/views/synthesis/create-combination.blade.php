@extends('layouts.app')

@section('content')
    {{--<form method="POST" action="{{ route('project.store') }}">--}}
    <form method="POST">
        @csrf
        <div class="container" ng-app="myApp" ng-controller="myCtrl">
            <div class="row justify-content-center" ng-init="addProjectId({{$project->id}})" >
                <div class="card-body" style="position: relative;">
                    <div id="example-basic" class="stepper wizard">
                        <h3>Название комбинации</h3>
                        {{--<h3>Combination name</h3>--}}
                        <section>
                            <div class="form-group row">
                                <label for="title" class="col-sm-2 col-form-label text-md-right">Название комбинации</label>

                                <div class="col-md-10">
                                    <input id="title" ng-model="title" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="title" value="{{ old('title') }}" required>
                                    @if ($errors->has('title'))
                                        <span class="invalid-feedback">
                                        <strong>{{ $errors->first('title') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                        </section>
                        <h3>Методологии</h3>
                        <section>
                            <div class="form-group row" ng-init="addMethodologyId({{$mark_comparisons->methodology_id ?? null}})">
                                <label for="title" class="col-sm-2 col-form-label text-md-right">Методологии</label>

                                <div class="col-md-10">
                                    <select
                                            ng-options="method as method.title for method in methods"
                                            ng-model="method_selected"
                                            ng-change="updateMethod()"
                                            class="form-control"
                                            name="method"
                                    >
                                    </select>
                                    @if ($errors->has('method'))
                                        <span class="invalid-feedback">
                                        <strong>{{ $errors->first('method') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                        </section>
                        <h3>Команда проекта</h3>
                        <section>
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Добавить члена комады</button>
                            <table class="table table-striped mt-4">
                                <thead>
                                <tr>
                                    <th style="width: 8.33%"  scope="col">#</th>
                                    <th style="width: 33.33%" scope="col">Член команды</th>
                                    <th style="width: 16.66%" scope="col">Минимальная</th>
                                    <th style="width: 16.66%" scope="col">Ожидаемая</th>
                                    <th style="width: 16.66%" scope="col">Мксимальная</th>
                                    <th style="width: 8.33%"  scope="col"></th>
                                </tr>
                                </thead>
                                <tbody>
                                    <tr ng-repeat="(key, person) in team">
                                        <td scope="row">@{{ key + 1 }}</td>
                                        <td>@{{person.name}}</td>
                                        <td><input size="5" class="form-control" type="number" ng-model="person.min"></td>
                                        <td><input size="5" class="form-control" type="number" ng-model="person.current"></td>
                                        <td><input size="5" class="form-control" type="number" ng-model="person.max"></td>
                                        <td><button type="button" class="btn btn-sm btn-danger" ng-click="removePerson(person)"><b style="font-size: 1.4em">-</b></button></td>
                                    </tr>
                                </tbody>
                            </table>
                        </section>
                        <h3>Процессы</h3>
                        <section style="overflow-y: scroll;">
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#processModal">Добавить процесс</button>
                            <table class="table table-striped mt-4">
                                <thead>
                                <tr>
                                    <th style="width: 16.66%" scope="col">Процесс</th>
                                    <th style="width: 75%" scope="col">Исполнители</th>
                                    <th style="width: 8.33%" scope="col"></th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr ng-repeat="(key, process) in processes">
                                    <td>
                                        <p>@{{process.name}}</p>
                                        <button type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#personProcessModal" ng-click="addCurrentProcess(key)">Выбрать исполнителя</button>
                                    </td>
                                    <td>
                                        <table class="table table-striped">
                                            <thead>
                                            <tr>
                                                <th style="width: 16.66%" scope="col">Исполнители</th>
                                                <th style="width: 16.66%" scope="col">Минимальная</th>
                                                <th style="width: 16.66%" scope="col">Ожидаемая</th>
                                                <th style="width: 16.66%" scope="col">Максимальная</th>
                                                <th style="width: 8.33%"  scope="col"></th>
                                            </thead>
                                            <tbody>
                                                <tr ng-repeat="(key_person, person) in process.team">
                                                    <td>@{{person.name}}</td>
                                                    <td><input size="5" class="form-control" type="number" ng-model="person.min"></td>
                                                    <td><input size="5" class="form-control" type="number" ng-model="person.current"></td>
                                                    <td><input size="5" class="form-control" type="number" ng-model="person.max"></td>
                                                    <td><button type="button" class="btn btn-sm btn-danger" ng-click="removeProcessPerson(key,key_person)"><b style="font-size: 1.4em">-</b></button></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </td>
                                    <td>
                                        <button type="button" class="btn btn-sm btn-danger" ng-click="removeProcess(key)"><b style="font-size: 1.4em">-</b></button>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </section>
                        <h3>Риски</h3>
                        <section style="overflow-y: scroll;">
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#risksModal">Добавить риск</button>
                            <table class="table table-striped mt-4">
                                <thead>
                                <tr>
                                    <th style="width: 25%" scope="col">Наименование риска</th>
                                    <th style="width: 33.33%" scope="col">Вероятность наступления</th>
                                    <th style="width: 33.33%" scope="col">Последствия проявления</th>
                                    <th style="width: 8.33%" scope="col"></th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr ng-repeat="(key, risk) in risks">
                                    <td>
                                        <p>@{{risk.name}}</p>
                                    </td>
                                    <td ng-repeat="(key_type, risk_type) in risk.type">
                                        <table class="table table-striped">
                                            <thead>
                                            <tr>
                                                <th style="width: 33.33%" scope="col">Минимальная</th>
                                                <th style="width: 33.33%" scope="col">Ожидаемая</th>
                                                <th style="width: 33.33%" scope="col">Максимальная</th>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td><input size="5" class="form-control" type="number" ng-model="risk_type.value[0].min"></td>
                                                <td><input size="5" class="form-control" type="number" ng-model="risk_type.value[0].current"></td>
                                                <td><input size="5" class="form-control" type="number" ng-model="risk_type.value[0].max"></td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </td>
                                    <td>
                                        <button type="button" class="btn btn-sm btn-danger" ng-click="removeRisk(key)"><b style="font-size: 1.4em">-</b></button>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </section>
                    </div>
                    <button type="button" id="calculate" class="btn btn-primary ml-2" style="right: 30px;position: absolute;display: none; bottom: 2px;" ng-click="calculate()">Сохранить</button>
                </div>
            </div>
            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Добавление персонала</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                                <input ng-model="new_person_name" type="text" class="form-control">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button"  class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
                            <button type="button" ng-click="addPerson()" class="btn btn-primary" data-dismiss="modal">Добавить</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal fade" id="processModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Добавление процесса</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                                <input ng-model="new_process_name" type="text" class="form-control">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button"  class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
                            <button type="button" ng-click="addProcess()" class="btn btn-primary" data-dismiss="modal">Добавить</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal fade" id="personProcessModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Добавление исполнителя</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <table class="table table-striped">
                                <thead>
                                <tr>
                                    <th style="width: 8.33%"  scope="col">#</th>
                                    <th style="width: 33.33%" scope="col">Член команды</th>
                                    <th style="width: 8.33%"  scope="col"></th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr ng-repeat="(key, person) in team">
                                    <td scope="row">@{{ key + 1 }}</td>
                                    <td>@{{person.name}}</td>
                                    <td><button type="button" class="btn btn-sm btn-primary" data-dismiss="modal" ng-click="addPersonToProcess(person)"><b style="font-size: 1.4em">+</b></button></td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="modal-footer">
                            <button type="button"  class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal fade" id="risksModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Добавление риска</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                                <input ng-model="new_risk_name" type="text" class="form-control">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button"  class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
                            <button type="button" ng-click="addRisk()" class="btn btn-primary" data-dismiss="modal">Добавить</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>


@endsection

@section('scripts')
    <script>

        $("#example-basic").steps({
            headerTag: "h3",
            bodyTag: "section",
            transitionEffect: "slideLeft",
            autoFocus: true,
            onStepChanged: function (event, currentIndex) {
                if(currentIndex == 4){
                    $("#calculate").show();
                }else{
                    $("#calculate").hide();
                }
            },
            labels: {
                current: "Текущее действие:",
                pagination: "Пагинация",
                finish: "Завершить",
                next: "Далее",
                loading: "Загрузка ..."
            }
        });

        $("#example-basic .actions ul li:nth-child(3)").remove();
    </script>
    <script src="{{ asset('js/angular.min.js') }}" ></script>
    <script src="{{ asset('js/combination.js') }}" ></script>
@endsection


