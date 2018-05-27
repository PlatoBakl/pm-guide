@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="card-body">
            <a class="btn btn-primary" href="{{ route('combination.create', ['project' => $project->id]) }}" >Добавить комбинацию</a>
            <button class="btn btn-primary" id="calculate" @if(count($combinations) < 2) disabled @endif>Расчитать</button>

            @if(count($combinations))
                <table class="table mt-4">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Название</th>
                        <th scope="col"></th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($combinations as $key => $combination)
                        <tr>
                            <th scope="row">{{$key + 1}}</th>
                            <td>
                                <div>{{$combination->name}}</div>
                                <div class="result" style="display: none" data-compination_id="{{$combination->id}}">
                                    <?php $info = json_decode($combination->value, true);?>

                                    @if(isset($info['processes']))
                                        <h4>Процессы</h4>
                                        <table class="table table-striped mt-4">
                                            <thead>
                                                <tr>
                                                    <th scope="col">Название</th>
                                                    <th scope="col">Исполнители</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($info['processes'] as $process)
                                                    <tr>
                                                        <td>{{$process['name']}}</td>
                                                        <td>
                                                            <table class="table">
                                                                <thead>
                                                                <tr>
                                                                    <th scope="col">Исполнитель</th>
                                                                    <th scope="col">Минимальная</th>
                                                                    <th scope="col">Ожидаемая</th>
                                                                    <th scope="col">Максимальная</th>
                                                                </tr>
                                                                </thead>
                                                                <tbody>
                                                                @foreach($process['team'] as $team)
                                                                    <tr>
                                                                        <td>{{$team['name']}}</td>
                                                                        <td>{{$team['min']}}</td>
                                                                        <td>{{$team['current']}}</td>
                                                                        <td>{{$team['max']}}</td>
                                                                    </tr>
                                                                @endforeach
                                                                </tbody>
                                                            </table>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    @endif
                                    @if(isset($info['team']))
                                        <h4>Команда проекта</h4>
                                        <table class="table table-striped mb-4">
                                            <thead>
                                            <tr>
                                                <th scope="col">Исполнитель</th>
                                                <th scope="col">Минимальная</th>
                                                <th scope="col">Ожидаемая</th>
                                                <th scope="col">Максимальная</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($info['team'] as $team)
                                                <tr>
                                                    <td>{{$team['name']}}</td>
                                                    <td>{{$team['min']}}</td>
                                                    <td>{{$team['current']}}</td>
                                                    <td>{{$team['max']}}</td>
                                                </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
                                    @endif
                                    @if(isset($info['risks']))
                                        <h4>Риски</h4>
                                        <table class="table table-striped mb-4">
                                            <thead>
                                            <tr>
                                                <th scope="col">Наименование риска</th>
                                                <th scope="col">Вероятность наступления</th>
                                                <th scope="col">Последствия проявления</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($info['risks'] as $risk)
                                                <tr>
                                                    <td>{{$risk['name']}}</td>
                                                    <td>
                                                        <table>
                                                            <thead>
                                                            <tr>
                                                                <th scope="col">Минимальная</th>
                                                                <th scope="col">Ожидаемая</th>
                                                                <th scope="col">Максимальная</th>
                                                            </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td>{{$risk['type'][0]['value'][0]['min']}}</td>
                                                                    <td>{{$risk['type'][0]['value'][0]['current']}}</td>
                                                                    <td>{{$risk['type'][0]['value'][0]['max']}}</td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </td>
                                                    <td>
                                                        <table>
                                                            <thead>
                                                                <tr>
                                                                    <th scope="col">Минимальная</th>
                                                                    <th scope="col">Ожидаемая</th>
                                                                    <th scope="col">Максимальная</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td>{{$risk['type'][1]['value'][0]['min']}}</td>
                                                                    <td>{{$risk['type'][1]['value'][0]['current']}}</td>
                                                                    <td>{{$risk['type'][1]['value'][0]['max']}}</td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </td>
                                                </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
                                    @endif
                                </div>
                            </td>
                            <td class="text-right"><a href="javascript:void(0);" class="btn btn-outline-primary btn-sm show-result">Подробнее</a></td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            @else
                <hr>
                Комбинаций нет
            @endif
        </div>
    </div>
</div>
@endsection
@section('scripts')
    <script>
        $(document).on('click','#calculate',function () {
            $.ajax({
                method: "GET",
                url: "{{route('combination.calculate',['project' => $project->id])}}",
                success: function(data){
                    $el =  $('.result[data-compination_id="'+data+'"]');
                    $el.toggle();
                    $('html, body').animate({
                        scrollTop: $el.parent().offset().top
                    }, 1000);
                }
            })
        });

        $(document).on('click','.show-result',function () {
            $el = $(this).parents('tr').find('.result');
            $el.toggle();
        });
    </script>
@endsection
