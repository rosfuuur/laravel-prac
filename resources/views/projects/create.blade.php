@extends('layout')
@section('content')
    <h1 class="title">Create New Project</h1>

    <form method="POST" action="/projects">
        {{ csrf_field() }}

        <div class="field">
            <label class="label" for="tile">Title</label>
            <div class="control">
                <input type="text" name="title" class="input {{ $errors->has('title') ? 'is-danger' : '' }}" placeholder="Project Title" value="{{ old('title') }}" required />
            </div>
        </div>

        <div class="field">
            <label class="label" for="description">Description</label>
            <div class="control">
                <textarea name="description" class="textarea {{ $errors->has('description') ? 'is-danger' : '' }}" placeholder="Project Description" required>{{ old('description') }}</textarea>
            </div>
        </div>

        <div class="field">
            <div class="control">
                <button type="submit" class="button is-link">Create Project</button>
            </div>
        </div>

        @include('errors')
    </form>
@endsection

@section('title', 'Create New Project')
