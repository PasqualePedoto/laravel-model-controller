{{-- Estendiamo il main layout --}}
@extends('layouts.main')

{{-- Aggiungiamo il titolo alla web page --}}
@section('title',$title)

{{-- Aggiungiamo il main content --}}
@section('content')
<div class="container">
    <div class="row">
        @forelse($movies as $movie)
            <div class="col mb-5">
                <a href="{{ route('movies.show', ["movie" => $movie->id]) }}" class="text-decoration-none text-dark">
                    <div class="card shadow" style="width: 18rem;">
                        <div class="card-body">
                            <h5 class="card-title">{{ $movie->title }}</h5>
                            <h6 class="card-subtitle mb-2 text-muted">{{ $movie->original_title }}</h6>
                            <p class="card-text"><strong>language:</strong>  {{ $movie->nationality }}</p>
                            <p class="card-text"><strong>release date:</strong>  {{ $movie->date }}</p>
                            <p class="card-text"><strong>vote:</strong>  {{ $movie->vote }}</p>
                        </div>
                    </div>
                </a>
            </div>
        @empty
            <p>La ricerca non ha prodotto risultati!</p>
        @endforelse
    </div>
</div>
@endsection