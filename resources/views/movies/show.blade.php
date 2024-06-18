@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h1 class="text-center m-4">{{ $movie->title }}</h1>
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Director: {{ $movie->director }}</h5>
            <h6 class="card-subtitle mb-2 text-muted">Release Date: {{ $movie->release_date }}</h6>
            <p class="card-text">{{ $movie->description }}</p>
            <a href="{{ route('movies.index') }}" class="btn btn-secondary">Back to List</a>
        </div>
    </div>
</div>
@endsection
