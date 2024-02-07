@extends('layouts.admin')

@section('content')
    <div class="container py-3">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header bg-primary text-white">
                        <h3 class="m-0">Dettaglio Progetto</h3>
                    </div>

                    <div class="card-body">
                        <h5 class="card-title text-center">{{ $project->title }}</h5>
                        <p class="card-text"><strong>Descrizione:</strong> {{ $project->description }}</p>
                    </div>
                </div>
                <div class="mt-3 text-center">
                    <a href="{{ route('admin.projects.index') }}" class="btn btn-secondary btn-sm">Torna Indietro</a>
                </div>
            </div>
        </div>
    </div>
@endsection
