@extends('layouts.app')

@section('scripts')
<script>
    var questions = @json($questions);
    var project = @json($project);
</script>
<script src="{{ asset('js/questionnaire.js') }}"></script>

@endsection

@section('content')
<div class="container choice">

    <meta name="csrf-token" content="{{ csrf_token() }}">
    <div class="row justify-content-center">
        <div class="card-body">

            <div>
                <div class="card">
                    <div class="card-header">
                        <nav>
                            <ul class="pagination justify-content-center">
                                @foreach ($questions as $question)
                                    <li class="page-item"  data-id="{{ $question->id - 1 }}">
                                        <a class="page-link" href="#">{{ $question->id  }}</a>
                                    </li>
                                @endforeach
                            </ul>
                        </nav>
                    </div>
                    <div class="card-body">
                        <p id="question" data-id="0" class="text-center">
                            {{ $questions[0]->question }}
                        </p>
                        <table class="table table-striped">
                            <thead>
                                <tr class="d-flex">
                                    <th scope="col" class="col-8 text-center">Possible answer</th>
                                    <th scope="col" class="col-4">Project membership score</th>
                                </tr>
                            </thead>
                            <tbody class="questionnaire">
                                @foreach ($questions[0]->answers as $answer)
                                    <tr class="d-flex">
                                        <td class="col-8 text-center" data-id="{{ $answer->answer_id }}" >
                                            {{ $answer->answer }}
                                        </td>
                                        <td class="col-4">
                                            <input class="points form-control form-control-sm" type="number" max="1" min="0" step="0.05" value="0"/>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div class="row justify-content-center">
                            <button type="button" id="back" class="btn btn-primary" style="margin-left: 15px;">Back</button>
                            <button type="button" id="next" class="btn btn-primary" style="margin-left: 15px;">Next</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
