@extends('layouts.admin')

@section('content')
    <div class="container mt-4">
        <div class="row mb-3">
            <div class="col">
                <a class="btn btn-primary btn-sm" href="{{ route('admin.projects.create') }}">Nuovo Progetto</a>
            </div>
            <div class="col-auto">
                @if (session('success'))
                    <div class="toast show align-items-center text-white bg-success border-0" role="alert"
                        aria-live="assertive" aria-atomic="true">
                        <div class="d-flex">
                            <div class="toast-body">
                                {{ session('success') }}
                            </div>
                            <button type="button" class="btn-close me-2 m-auto" data-bs-dismiss="toast"
                                aria-label="Close"></button>
                        </div>
                    </div>
                @endif
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="list-group">
                    @foreach ($projects as $project_item)
                        <div class="list-group-item d-flex justify-content-between align-items-center">
                            <h5 class="mb-0">{{ $project_item->title }}</h5>
                            <div class="btn-group gap-1">
                                <a class="btn btn-primary" href="{{ route('admin.projects.show', $project_item) }}">Info
                                    Progetto</a>
                                <a class="btn btn-secondary"
                                    href="{{ route('admin.projects.edit', $project_item) }}">Modifica Progetto</a>
                                <form action="{{ route('admin.projects.destroy', $project_item) }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <input class="btn btn-danger mc-delete" type="submit" value="Cancella Progetto">
                                </form>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
