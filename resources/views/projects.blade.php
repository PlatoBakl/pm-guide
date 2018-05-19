@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="card">
            <div class="card-header">User projects</div>
            <div class="card-body">
                <table class="table table-striped">
                    <thead>
                        <tr class="d-flex">
                            <th scope="col" class="col-4 text-center">Project Name</th>
                            <th scope="col" class="col-4 text-center">Project Type</th>
                            <th scope="col" class="col-4 text-center">Calculated</th>
                        </tr>
                    </thead>
                    <tbody class="questionnaire">
                    @foreach ($user->projects as $project)
                        <tr class="d-flex">
                            <td class="col-4 text-center">
                                {{ $project->title }}
                            </td>
                            <td class="col-4 text-center">
                                {{ $project->type ? 'IT project': 'Not IT project' }}
                            </td>
                            <td class="col-4 text-center">
                                {{ ($project->comparison)  ? 'yes' : 'no' }}
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
