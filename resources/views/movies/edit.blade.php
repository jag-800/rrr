@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h1 class="text-center mb-4">Edit Movie</h1>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ route('movies.update', $movie->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="title">Title</label>
                <input type="text" name="title" class="form-control" id="title" value="{{ $movie->title }}" required>
            </div>
            <div class="form-group col-md-6">
                <label for="director">Director</label>
                <input type="text" name="director" class="form-control" id="director" value="{{ $movie->director }}" required>
            </div>
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <textarea name="description" class="form-control" id="description" rows="3" required>{{ $movie->description }}</textarea>
        </div>
        <div class="form-group">
            <label for="release_date">Release Date</label>
            <input type="date" name="release_date" class="form-control" id="release_date" value="{{ $movie->release_date }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Update Movie</button>
    </form>
</div>
@endsection
