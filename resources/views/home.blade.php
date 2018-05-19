@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">Раздел 1</div>
                <div class="card-body">
                    <div >
                        @todo: add logo
                    </div>
                    <div>Обобщенный свод знаний</div>
                    <a href="{{ url('guide/info') }}">Перейти</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">Раздел 2</div>
                <div class="card-body">
                    <div >
                        @todo: add logo
                    </div>
                    <div>Выбор методологии УП</div>
                    <a href="{{ url('choice') }}">Перейти</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">Раздел 3</div>
                <div class="card-body">
                    <div >
                        @todo: add logo
                    </div>
                    <div>Синтез руководства для УП</div>
                    <a href="{{ url('synthesis') }}">Перейти</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
