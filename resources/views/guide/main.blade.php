@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-2">
            <nav class="nav flex-column">
                <a class="nav-link" href="{{ url('guide', ['info']) }}">Info</a>
                <a class="nav-link" href="{{ url('guide', ['principles']) }}">Принципы и ценности УП</a>
                <a class="nav-link" href="{{ url('guide', ['life-cycles']) }}">Жизненные циклы проекта</a>
                <a class="nav-link" href="{{ url('guide', ['organisation-structures']) }}">Огранизационные структуры при УП</a>
                <a class="nav-link" href="{{ url('guide', ['roles']) }}">Роли и ответсвенности в УП</a>
                <a class="nav-link" href="{{ url('guide', ['processes']) }}">Процессы УП</a>
            </nav>
        </div>

        <div class="col-10">
            @yield('guide-content')
        </div>
    </div>
@endsection