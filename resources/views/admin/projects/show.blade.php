@extends('layouts.admin')

@section('content')
    <h2 class="text-center">Dettaglio Progetto</h2>
    <div class="d-flex justify-content-center align-items-center py-3">
        <div class="card" style="width: 30rem;">
            <div class="card-body">
                <h5 class="card-title text-center">{{ $project->title }}</h5>
                <p class="card-text"><strong>Descrizione: </strong>{{ $project->description }}</p>
            </div>
        </div>
    </div>
    <div class="d-flex justify-content-center align-items-center py-2">
        <a href="{{ route('admin.projects.index') }}" class="btn btn-primary py-2">Torna ai Progetti</a>
    </div>
@endsection
