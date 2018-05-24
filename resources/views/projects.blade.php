@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="card" style="width:100%">
            <div class="card-header">User projects</div>
            <div class="card-body">
                <table class="table table-striped">
                    <thead>
                        <tr class="d-flex">
                            <th scope="col" class="col-3 text-center">Название проекта</th>
                            <th scope="col" class="col-2 text-center">Тип проекта</th>
                            <th scope="col" class="col-3 text-center">Подсчет</th>
                            <th scope="col" class="col-4 text-center">Методология</th>
                        </tr>
                    </thead>
                    <tbody class="questionnaire">
                    @foreach ($user->projects as $project)
                        <tr class="d-flex">
                            <td class="col-3 text-center">
                                {{ $project->title }}
                            </td>
                            <td class="col-3 text-center">
                                {{ $project->type ? 'IT project': 'Not IT project' }}
                            </td>
                            <td class="col-3 text-center">
                                {{ ($project->comparison)  ? 'yes' : 'no' }}
                            </td>
                            <td class="col-3 text-center">
                                {{ ($project->comparisons->sortByDesc('euclid') && $project->comparisons->sortByDesc('euclid')->first()['methodology_id'])  ? $methodologies->find($project->comparisons->sortBy('euclid')->first()['methodology_id'])->name : "-" }}
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
