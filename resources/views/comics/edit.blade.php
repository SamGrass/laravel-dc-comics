@extends('layouts.main')

@section('content')

<div class="container my-5">
    <h1>Modifica fumetto</h1>
    <form action="{{ route('comics.update', $comic) }}" method="POST">
        @csrf
        @method('PUT')

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
            <input type="text" value="{{ old('title', $comic->title) }}"
                class="form-control @error('title') is-invalid @enderror" id="title" name="title">
            @error('title')
            <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
        <div class="mb-3">
            <label for="thumb" class="form-label">Percorso immagine</label>
            <input type="text" value="{{ old('thumb', $comic->thumb) }}"
                class="form-control @error('thumb') is-invalid @enderror" id="thumb" name="thumb">
            @error('thumb')
            <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Prezzo</label>
            <input type="text" value=" {{ old('price', $comic->price) }}"
                class="form-control @error('price') is-invalid @enderror" id="price" name="price">
            @error('price')
            <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
        <div class="mb-3">
            <label for="series" class="form-label">Serie</label>
            <input type="text" value="{{ old('series', $comic->series)  }}"
                class="form-control @error('series') is-invalid @enderror" id="series" name="series">
            @error('series')
            <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
        <div class="mb-3">
            <label for="sale_date" class="form-label">Data di pubblicazione</label>
            <input type="text" value="{{ old('sale_date', $comic->sale_date)  }}"
                class="form-control @error('sale_date') is-invalid @enderror" id="sale_date" name="sale_date">
            @error('sale_date')
            <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
        <div class="mb-3">
            <label for="type" class="form-label">Tipo</label>
            <input type="text" value="{{ old('type', $comic->type) }}"
                class="form-control @error('type') is-invalid @enderror" id="type" name="type">
            @error('type')
            <small class="text-danger">{{ $message }}</small>
            @enderror
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