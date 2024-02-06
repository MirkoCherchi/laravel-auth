@extends('layouts.admin')

@section('content')
    <div class="container mt-4">
        <div class="row mb-3">
            <div class="col">
                <a class="btn btn-primary" href="{{ route('admin.projects.create') }}">Nuovo Progetto</a>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="list-group">
                    @foreach ($projects as $project_item)
                        <div class="list-group-item d-flex justify-content-between align-items-center">
                            <h5 class="mb-0">{{ $project_item->title }}</h5>
                            <div class="btn-group">
                                <a class="btn btn-primary" href="{{ route('admin.projects.show', $project_item->id) }}">Info
                                    Progetto</a>
                                <a class="btn btn-secondary"
                                    href="{{ route('admin.projects.edit', $project_item->id) }}">Modifica Progetto</a>
                                <form action="{{ route('admin.projects.destroy', $project_item->id) }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <input class="btn btn-danger" type="submit" value="Cancella Progetto">
                                </form>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
