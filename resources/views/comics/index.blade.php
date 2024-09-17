@extends('layouts.main')

@section('content')

<div class="container my-5">
    <div>
        <h1 class="d-inline">I miei Fumetti</h1>
        <a href="{{ route('comics.create') }}" class="btn btn-primary float-end"><i class="fa-solid fa-plus"></i></a>
    </div>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#id</th>
                <th scope="col">Titolo</th>
                <th scope="col">Immagine</th>
                <th scope="col">Prezzo</th>
                <th scope="col">Tipo</th>
                <th scope="col">Rilascio</th>
                <th scope="col">Strumenti</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($comics as $comic)
            <tr>
                <th>{{ $comic->id }}</th>
                <td>{{ $comic->title}}</td>
                <td><img width="20%" src="{{ $comic->thumb}}" alt=""></td>
                <td>{{ $comic->price}}</td>
                <td>{{ $comic->type}}</td>
                <td>{{ $comic->sale_date}}</td>
                <td>
                    <div class="d-flex gap-1">
                        <a href="{{ route('comics.show', $comic) }}" class="btn btn-success"><i
                                class="fa-solid fa-eye"></i></a>
                        <a href="{{ route('comics.edit', $comic) }}" class="btn btn-warning"><i
                                class="fa-solid fa-pencil"></i></a>
                    </div>
                </td>
            </tr>

            @endforeach
        </tbody>
    </table>
</div>

@endsection


@section('titlePage')
I miei Fumetti
@endsection