@extends('layouts.main')

@section('content')

<div class="container my-5">
    <h1>Aggiungi fumetto</h1>
    <form action="{{ route('comics.store') }}" method="POST">
        @csrf

        @if($errors->any())
        <div class="alert alert-danger" role="alert">
            <ul>
                @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        <div class="mb-3">
            <label for="title" class="form-label">Titolo</label>
            <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title"
                value="{{ old('title') }}">
            @error('title')
            <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
        <div class="mb-3">
            <label for="thumb" class="form-label">Percorso immagine</label>
            <input type="text" class="form-control @error('thumb') is-invalid @enderror" id="thumb" name="thumb"
                value="{{ old('thumb') }}">
            @error('thumb')
            <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Prezzo</label>
            <input type="text" class="form-control @error('price') is-invalid @enderror" id="price" name="price"
                value="{{ old('price') }}">
            @error('price')
            <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
        <div class="mb-3">
            <label for="series" class="form-label">Serie</label>
            <input type="text" class="form-control @error('series') is-invalid @enderror" id="series" name="series"
                value="{{ old('series') }}">
            @error('series')
            <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
        <div class="mb-3">
            <label for="sale_date" class="form-label">Data di pubblicazione</label>
            <input type="text" class="form-control @error('sale_date') is-invalid @enderror" id="sale_date"
                name="sale_date" value="{{ old('sale_date') }}">
            @error('sale_date')
            <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
        <div class="mb-3">
            <label for="type" class="form-label">Tipo</label>
            <input type="text" class="form-control @error('type') is-invalid @enderror" id="type" name="type"
                value="{{ old('type') }}">
            @error('type')
            <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
        <div>
            <textarea width="100%" name="description" id="description" cols="30"
                rows="10">{{ old('description') }}</textarea>
        </div>

        <button type="submit" class="btn btn-primary">Crea</button>
        <button type="reset" class="btn btn-secondary">Annulla</button>

    </form>

</div>

@endsection


@section('titlePage')
I miei Fumetti
@endsection