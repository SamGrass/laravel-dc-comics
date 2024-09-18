@extends('layouts.main')

@section('content')

<div class="container my-5">
    <h1>Modifica fumetto</h1>
    <form action="{{ route('comics.update', $comic) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="title" class="form-label">Titolo</label>
            <input type="text" value="{{ $comic->title }}" class="form-control" id="title" name="title">
        </div>
        <div class="mb-3">
            <label for="thumb" class="form-label">Percorso immagine</label>
            <input type="text" value="{{ $comic->thumb }}" class="form-control" id="thumb" name="thumb">
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Prezzo</label>
            <input type="text" value="{{ $comic->price }}" class="form-control" id="price" name="price">
        </div>
        <div class="mb-3">
            <label for="series" class="form-label">Serie</label>
            <input type="text" value="{{ $comic->series }}" class="form-control" id="series" name="series">
        </div>
        <div class="mb-3">
            <label for="sale_date" class="form-label">Data di pubblicazione</label>
            <input type="text" value="{{ $comic->sale_date }}" class="form-control" id="sale_date" name="sale_date">
        </div>
        <div class="mb-3">
            <label for="type" class="form-label">Tipo</label>
            <input type="text" value="{{ $comic->type }}" class="form-control" id="type" name="type">
        </div>
        <div>
            <textarea width="100%" name="description" id="description" cols="30"
                rows="10">{{ $comic->description }}"</textarea>
        </div>

        <button type="submit" class="btn btn-primary">Modifica</button>
        <button type="reset" class="btn btn-secondary">Annulla</button>

</div>

@endsection


@section('titlePage')
I miei Fumetti
@endsection