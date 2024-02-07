@extends('layouts.admin')

@section('content')
    <div class="container">
        <h2 class="text-center">Inserisci Nuovo Progetto</h2>
        <a href="{{ route('admin.projects.index') }}" class="btn btn-primary my-3">Torna in HomePage</a>

        <form action="{{ route('admin.projects.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label class="form-label">Titolo</label>
                <input type="text" class="form-control @error('title') is-invalid @enderror" name="title"
                    value="{{ old('title') }}">
                @error('title')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror

            </div>

            <div class="mb-3">
                <label class="form-label">Descrizione</label>
                <textarea name="description" class="form-control @error('description') is-invalid @enderror" id=""
                    cols="30" rows="10" value="{{ old('description') }}"></textarea>
                @error('description')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Inserisci</button>


        </form>
    </div>
@endsection
