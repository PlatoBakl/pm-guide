@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Выбор методологии УП. Руководство пользователя</div>
                <div class="card-body">
                    <div >
                        @todo: add user guide
                    </div>
                    <a href="{{ url('choice', ['create-project']) }}">Создание проекта</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
