@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="card-body">
            <nav>
                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                    <a class="nav-item nav-link active" id="nav-create-tab" data-toggle="tab" href="#nav-create" role="tab" aria-controls="nav-create" aria-selected="true">Create project</a>
                    @if (count($user->projects) !== 0)
                        <a class="nav-item nav-link" id="nav-choose-tab" data-toggle="tab" href="#nav-choose" role="tab" aria-controls="nav-choose" aria-selected="false">Select project</a>
                    @endif
                </div>
            </nav>
            <div class="tab-content" id="nav-tabContent"  style="margin-top: 30px">
                <div class="tab-pane fade show active" id="nav-create" role="tabpanel" aria-labelledby="nav-create-tab">
                    <div class="container">
                        <form method="POST" action="{{ url('synthesis/create-project') }}">
                            @csrf

                            <div class="form-group row">
                                <label for="title" class="col-sm-4 col-form-label text-md-right">Project name</label>

                                <div class="col-md-6">
                                    <input id="title" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="title" value="{{ old('name') }}" required autofocus>

                                    @if ($errors->has('title'))
                                        <span class="invalid-feedback">
                                    <strong>{{ $errors->first('title') }}</strong>
                                </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="type" class="col-md-4 col-form-label text-md-right">Project type</label>

                                <div class="col-md-6">
                                    <select name="type" class="form-control">
                                        <option value="1">IT project</option>
                                        <option value="0">Not IT project</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="objective" class="col-sm-4 col-form-label text-md-right">Project objective</label>

                                <div class="col-md-6">
                            <textarea id="objective" type="text" class="form-control{{ $errors->has('objective') ? ' is-invalid' : '' }}" name="objective" value="{{ old('objective') }}" required autofocus>
                            </textarea>
                                    @if ($errors->has('objective'))
                                        <span class="invalid-feedback">
                                    <strong>{{ $errors->first('objective') }}</strong>
                                </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="limit" class="col-sm-4 col-form-label text-md-right">Cost limit</label>

                                <div class="col-md-6">
                                    <input type="number" step="0.05" min="0" class="form-control" required name="limit">
                                </div>
                            </div>
                            <div class="form-group row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <button type="button" id="save" class="btn btn-primary">Save</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                @if (count($user->projects) !== 0)
                <div class="tab-pane fade" id="nav-choose" role="tabpanel" aria-labelledby="nav-choose-tab">
                    <div class="container">
                        <form method="POST" action="{{ url('synthesis/create-project') }}">
                            @csrf

                            <div class="form-group row">
                                <label for="project_id" class="col-sm-4 col-form-label text-md-right">Project name</label>

                                <div class="col-md-6">
                                    <select class="form-control mb-2 mr-sm-2 mb-sm-0" name="project_id">
                                        @foreach ($user->projects as $project)
                                            <option value="{{ $project->id }}">{{ $project->title  }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="limit" class="col-sm-4 col-form-label text-md-right">Cost limit</label>

                                <div class="col-md-6">
                                    <input type="number" step="0.05" min="0" class="form-control" required name="limit">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-8 offset-md-4">
                                    <button type="button" class="btn btn-primary" id="choose">Save</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection
