@extends('layouts.main')

@section('content')
    @forelse($movies as $movie)
        
    @empty
        <p>La ricerca non ha prodotto risultati!</p>
    @endforelse
@endsection