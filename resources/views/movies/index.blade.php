@extends('layouts.main')

@section('title','Movies List')

@section('content')
<div class="container mt-5">
    <div class="card" style="width: 18rem;">
        <div class="card-body">
          <h5 class="card-title">Titolo Principale</h5>
          <h6 class="card-subtitle mb-2 text-muted">Titolo Originale</h6>
          <p class="card-text">Nazionalità</p>
          <p class="card-text">Data</p>
          <span class="card-text">voto</span>
          <a href="#" class="card-link">Card link</a>      
        </div>
    </div>
</div>


@endsection