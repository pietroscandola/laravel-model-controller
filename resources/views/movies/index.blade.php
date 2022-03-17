@extends('layouts.main')

@section('title','Movies List')

@section('content')
<div class="container mt-5">
  <div class="d-flex flex-wrap justify-content-center">
    @foreach($movies as $movie)
      <div class="card m-3" style="width: 18rem;">
          <div class="card-body">
            <h5 class="card-title">{{ $movie->title}}</h5>
            <h6 class="card-subtitle mb-2 text-muted">{{ $movie->original_title}}</h6>
            <p class="card-text">Languages: {{ $movie->nationality}}</p>
            <p class="card-text">Date: {{ $movie->date}}</p>
            <p class="card-text">Vote: {{ $movie->vote}}</p>
            <a href="{{ route('movies.show', ['id' => $movie->id]) }}" class="card-link">Scopri di più</a>      
          </div>
      </div>
    @endforeach
  </div>  
</div>


@endsection