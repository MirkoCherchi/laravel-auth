@extends('layouts.admin')

@section('content')
    <div class="container mt-4">
        <div class="row mb-3">
            <div class="col">
                <a class="btn btn-primary btn-sm" href="{{ route('admin.projects.create') }}">
                    <i class="fas fa-plus"></i> Nuovo Progetto
                </a>
            </div>
        </div>
        @if (session('success'))
            <div class="row">
                <div class="col">
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>Successo!</strong> {{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                </div>
            </div>
        @endif

        @if (session('message'))
            <div class="row">
                <div class="col">
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <strong>Eliminato!</strong> {{ session('message') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                </div>
            </div>
        @endif

        <div class="row">
            <div class="col">
                <div class="list-group">
                    @foreach ($projects as $project_item)
                        <div class="list-group-item d-flex justify-content-between align-items-center">
                            <h5 class="mb-0">{{ $project_item->title }}</h5>
                            <div class="btn-group" role="group">
                                <a class="btn btn-primary" href="{{ route('admin.projects.show', $project_item) }}">
                                    <i class="fas fa-info-circle"></i> Info Progetto
                                </a>
                                <a class="btn btn-secondary" href="{{ route('admin.projects.edit', $project_item) }}">
                                    <i class="fas fa-edit"></i> Modifica Progetto
                                </a>
                                <form action="{{ route('admin.projects.destroy', $project_item) }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger mc-delete">
                                        <i class="fas fa-trash-alt"></i> Elimina Progetto
                                    </button>
                                </form>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
