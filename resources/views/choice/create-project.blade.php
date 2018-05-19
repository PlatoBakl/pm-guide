@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="card-body">
            <form method="POST" action="{{ url('choice/create-project') }}">
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

                <div class="form-group row mb-0">
                    <div class="col-md-8 offset-md-4">
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
