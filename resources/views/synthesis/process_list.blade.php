@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="card-body">
            <a class="btn btn-primary" href="{{ route('combination.create', ['project' => $project->id]) }}" >Добавить комбинацию</a>
            <button class="btn btn-primary" id="calculate" @if(!count($combinations)) disabled @endif>Расчитать</button>

            @if(count($combinations))
                <table class="table table-striped mt-4">
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
                            <td>{{$combination->name}}</td>
                            <td class="text-right"><a href="#" class="btn btn-outline-primary btn-sm">Подробнее</a></td>
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
                    alert( "Оптимальная комбинация " + data );
                }
            })
        });
    </script>
@endsection
