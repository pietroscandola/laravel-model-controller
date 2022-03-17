@extends('layouts.main')

@section('title', $movie->title)

@section('content')
<div class="container mt-5">
    <div class="card-body">
        <h5 class="card-title">{{ $movie->title}}</h5>
        <h6 class="card-subtitle mb-2 text-muted">{{ $movie->original_title}}</h6>
        <p class="card-text">Languages: {{ $movie->nationality}}</p>
        <p class="card-text">Date: {{ $movie->date}}</p>
        <p class="card-text">Vote: {{ $movie->vote}}</p>
        <a href="{{route('movies.index')}}">Indietro</a>        
    </div>
</div>

@endsection