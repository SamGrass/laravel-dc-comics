@extends('layouts.main')

@section('content')

<div class="container my-5">
    <h1 class="mb-5">{{ $comic->title }}</h1>
    <p class="mb-3"> Prezzo: {{ $comic->price }}, Data di rilascio: {{ $comic->sale_date }}, Serie: {{ $comic->series
        }}, Tipo: {{ $comic->type }}, Slug: {{ $comic->slug }}</p>
    <img class="img-fluid mb-3" src="{{ $comic->thumb }}" alt="">
    <p>{{ $comic->description }}</p>

</div>

@endsection


@section('titlePage')
I miei Fumetti
@endsection