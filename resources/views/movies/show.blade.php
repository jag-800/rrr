@extends('layouts.app')

@section('content')
<div class="mt-5">
    <h1 class="text-center m-4">{{ $movie->title }}</h1>
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">監督: {{ $movie->director }}</h5>
            <h6 class="card-subtitle mb-2 text-muted">公開日: {{ $movie->release_date }}</h6>
            <p class="card-text">{{ $movie->description }}</p>
            <a href="{{ route('movies.index') }}" class="btn btn-secondary">まとめに戻る</a>
        </div>
    </div>
</div>
@endsection
