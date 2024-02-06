@extends('layouts.admin')

@section('content')
    <a class="btn btn-primary my-3" href="{{ route('admin.projects.create') }}">New Project</a>
    <hr>
    <ul class="m-0 p-0">
        @foreach ($projects as $project)
            <li class="list-unstyled py-1">{{ $project->title }}</li>
        @endforeach
    </ul>
@endsection
